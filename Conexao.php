<?php

class Conexao
{
    
    public $PDO;
    
    private $tipo;
    private $host;
    private $usuario;
    private $senha;
    private $banco;

    // Metodo construtor
    public function __construct()
    {
        $this->host = "localhost";
        $this->usuario = "teste";
        $this->senha = "teste123";
        $this->banco = "testeaula";
    }
    
    // Metodo fechar conexao
    public function conecta()
    {
        try {

            $this->PDO = mysqli_connect($this->host,$this->usuario,$this->senha,$this->banco);
            
            /*
            $this->PDO->exec("SET CHARACTER SET utf8");
            $this->PDO->exec('SET ANSI_NULLS ON');
            $this->PDO->exec('SET ANSI_WARNINGS ON');
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->PDO->beginTransaction();
            */
        } catch (PDOException $e) {
            
            echo "Não foi possível estabelecer a conexão com o banco de dados local. " . $e->getMessage();
            die();
            
        }
    }
    
    // Metodo fechar conexao
    public function fechaConexao()
    {
        $this->PDO = NULL;
    }
}

