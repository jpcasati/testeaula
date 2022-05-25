<?php

include_once('ClienteDAO.php');

$clienteDAO = new ClienteDAO();

$id = $_GET['id'];

$clienteDAO->excluir($id);

header('location: index.php');

?>
