<?php
/* Parâmetros de conexão (em ambiente de desenvolvimento, no nosso caso, XAMPP) */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas";

/* Configurações para a conexão de dados */

// Criando conexão com o banco usando a classe PDO
// PDO (PHP Data Object): classe para manipulação de banco de dados 
$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco;charset=utf8",$usuario, $senha
);

/* Configurar PDO para lançar exceções/erros caso ocorram */
$conexao->setAttribute(
    PDO::ATTR_ERRMODE ,
    PDO::ERRMODE_EXCEPTION
) ;
