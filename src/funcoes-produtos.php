<?php 
require_once "conecta.php";

// listarProdutos: usada pela página produtos/visualizar.php
function listarProdutos(PDO $conexao):array{
    $sql = "SELECT * FROM produtos ORDER BY nome ";

    try {
        /* Preparando o comando SQL ANTES de executar no servidor e guardando em memória (variável consulta ou query) */
        $consulta = $conexao->prepare($sql);
        
        /* Executando o comando no banco de dados */
        $consulta->execute();
    
        /* Busca/Retorna todos os dados provenientes da execução da consulta e os transforma em um array associativo */
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (Exception $erro) {
        die("Erro ao carregar PRODUTOS: ".$erro->getMessage());
    }
};
