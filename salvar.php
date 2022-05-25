<?php

include_once('Cliente.php');
include_once('ClienteDAO.php');


$cliente = new Cliente();

$cliente->nome = $_POST['nome'];
$cliente->email = $_POST['email'];

$clienteDAO = new ClienteDAO();

$clienteDAO->salvar($cliente);

header('location: index.php');

?>
