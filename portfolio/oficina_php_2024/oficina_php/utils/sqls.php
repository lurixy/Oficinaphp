<?php
  const createIfNotExistsLinguagensTable = "CREATE TABLE IF NOT EXISTS `linguagens`(id INT NOT NULL PRIMARY KEY, nome VARCHAR(50) NOT NULL, extensao VARCHAR(10) NOT NULL, created_at DATE NOT NULL DEFAULT(current_timestamp()));";
  const inserirLinguagemSQL = "INSERT INTO `linguagens` (`nome`, `extensao`) VALUES ('php', '.php');";
  const selectLinguagemSQL = "SELECT * FROM `linguagens`;";
?>
