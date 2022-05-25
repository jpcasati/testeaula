<?php

include_once('Cliente.php');
include_once('ClienteDAO.php');

?>


<html>

<head>
    <title>Teste 1</title>
</head>

<body style="background-color: #777777">

<p>Formulário de cadastro de cliente</p>

<form action="salvar.php" method="post">

    <p>Nome: <input type="text" name="nome"/> </p>
    <p>E-Mail: <input type="text" name="email"/> </p>

    <button type="submit">Salvar</button>
</form>
<br/><br/>

<table>

    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>E-MAIL</td>
    </tr>

<?php
$clienteDAO = new ClienteDAO();
$result = $clienteDAO->listar();

while($cliente = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?= $cliente['id'] ?></td>
	<td><?= $cliente['nome'] ?></td>
	<td><?= $cliente['email'] ?></td>
        <td><a href="excluir.php?id=<?= $cliente['id'] ?>">[X]</a></td>
    </tr>
<?php } ?>
</table>


</body>
