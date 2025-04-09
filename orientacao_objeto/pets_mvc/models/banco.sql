CREATE DATABASE IF NOT EXISTS Pets;

USE Pets;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuario` (`id_usuario`, `nome`, `celular`, `email`, `senha`) VALUES
(1, 'Kaique', '(14) 9114-4192', 'kaiq@hotmail.com', 'kaique123');

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);
  
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

CREATE TABLE `pets` (
  `id_pet` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `raca` varchar(80) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pets` (`id_pet`, `nome`, `idade`, `raca`, `cor`, `id_usuario`) VALUES
(1, 'Malu', '10', 'Tamanduá', 'Marrom', 1);

ALTER TABLE `pets`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `id_usuario` (`id_usuario`);
  
ALTER TABLE `pets`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
  
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;