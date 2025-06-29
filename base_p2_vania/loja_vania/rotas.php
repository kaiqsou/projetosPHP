<?php
class Rotas
{
    private static array $rotas = [];

    public static function get(string $uri, string $acao)
    {
        self::$rotas['GET'][] = ['uri' => $uri, 'acao' => $acao];
    }

    public static function post(string $uri, string $acao)
    {
        self::$rotas['POST'][] = ['uri' => $uri, 'acao' => $acao];
    }

    public static function executar(string $metodo, string $uriAtual)
	{
    // Verifica se existem rotas cadastradas para o método HTTP (GET, POST, etc.)
    if (!isset(self::$rotas[$metodo])) {
        // Se não existir, retorna erro 405 - Método não permitido
        http_response_code(405);
        echo "<h1>405 - Método HTTP não permitido</h1>";
        return;
    }

    // Percorre todas as rotas cadastradas para o método HTTP
    foreach (self::$rotas[$metodo] as $rota) {
        // Substitui os parâmetros dinâmicos na URI, como {id}, por uma regex que captura qualquer texto exceto barra '/'
        $padrao = preg_replace('#\{[a-zA-Z_][a-zA-Z0-9_]*\}#', '([^/]+)', $rota['uri']);

        // Cria a expressão regular para casar a URI atual,
        // permite ou não a barra no final da URL (/curso/editar/5 e /curso/editar/5/)
        $regex = "#^" . rtrim($padrao, '/') . "/?$#";

        // Verifica se a URI atual bate com a expressão regular da rota
        if (preg_match($regex, $uriAtual, $matches)) {
            // Remove o primeiro elemento do array que é a string toda casada (não precisamos dela)
            array_shift($matches);

            // Separa o nome da classe do controller e o método que deve ser chamado
            // Exemplo: 'cursoController@editar' vira ['cursoController', 'editar']
            [$controller, $metodoController] = explode('@', $rota['acao']);

            // Verifica se a classe controller existe, senão retorna erro 500
            if (!class_exists($controller)) {
                http_response_code(500);
                echo "<h1>Erro: Controller $controller não encontrado.</h1>";
                return;
            }

            // Cria um objeto da classe controller
            $obj = new $controller();

            // Verifica se o método existe no controller, senão retorna erro 500
            if (!method_exists($obj, $metodoController)) {
                http_response_code(500);
                echo "<h1>Erro: Método $metodoController não existe em $controller.</h1>";
                return;
            }

            // Chama o método do controller, passando os parâmetros capturados pela regex (ex: id)
            return call_user_func_array([$obj, $metodoController], $matches);
        }
    }

    // Se nenhuma rota bateu com a URI atual, retorna erro 404 - Página não encontrada
    http_response_code(404);
    echo "<h1>404 - Rota não encontrada</h1>";
	}
}
// início
Rotas::get('/loja', 'inicioController@inicio');

// Categoria
Rotas::get('/loja/listar', 'categoriaController@listar');
Rotas::get('/loja/inserir', 'categoriaController@inserir');
Rotas::post('/loja/inserir', 'categoriaController@inserir');
Rotas::get('/loja/alterar/{id}', 'categoriaController@alterar');
Rotas::post('/loja/edit', 'categoriaController@edit');
Rotas::get('/loja/excluir/{id}', 'categoriaController@excluir');
//usuários
Rotas::get('/loja/login', 'usuarioController@login');
Rotas::post('/loja/login', 'usuarioController@login');
Rotas::get('/loja/inserirUsuario', 'usuarioController@inserir');
Rotas::post('/loja/inserirUsuario', 'usuarioController@inserir');
Rotas::get('/loja/logout', 'usuarioController@logout');
//produto
Rotas::get('/loja/listarProduto', 'produtoController@listar');
Rotas::get('/loja/inserirProduto', 'produtoController@inserir');
Rotas::post('/loja/inserirProduto', 'produtoController@inserir');

Rotas::get('/loja/situacao/{id}/{situacao}', 'produtoController@alterar_situacao');

Rotas::get('/loja/alterarProduto/{id}', 'produtoController@alterar');

Rotas::post('/loja/editProduto', 'produtoController@edit');




?>