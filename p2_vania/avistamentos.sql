CREATE TABLE animais (
  idanimais INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(80) NULL,
  especie VARCHAR(80) NULL,
  PRIMARY KEY(idanimais)
);

CREATE TABLE Avistamentos (
  idAvistamentos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idanimais INTEGER UNSIGNED NOT NULL,
  data_avistamento DATE NULL,
  perigo VARCHAR(4) NULL,
  local_avistamento VARCHAR(100) NULL,
  PRIMARY KEY(idAvistamentos),
  INDEX Avistamentos_FKIndex1(idanimais),
  FOREIGN KEY(idanimais)
    REFERENCES animais(idanimais)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


