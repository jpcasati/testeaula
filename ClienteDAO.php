<?php

include_once('Conexao.php');

class ClienteDAO {

    private $pu;

    function __construct() {
        $this->pu = new Conexao();
    }


    function salvar($cliente) {
	
    	$sql = "INSERT INTO cliente (nome, email) VALUES
		('$cliente->nome', '$cliente->email')";

	$this->pu->conecta();

	mysqli_query($this->pu->PDO, $sql);
        
        $this->pu->fechaConexao();

    }


    function listar() {

        $sql = "SELECT * FROM cliente";

        $this->pu->conecta();

        $result = mysqli_query($this->pu->PDO, $sql);

        $this->pu->fechaConexao();
	
	return $result;
    }

    function excluir($id) {

        $sql = "DELETE FROM cliente WHERE id = $id";

        $this->pu->conecta();

        mysqli_query($this->pu->PDO, $sql);

        $this->pu->fechaConexao();

    }
}



?>
