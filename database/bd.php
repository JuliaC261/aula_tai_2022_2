<?php

class BD
{
    private $host = "localhost";
    private $dbname = "database";
    private $port = 3306;
    private $user = "root";
    private $password = "";
    private $db_charset = "utf8";
    public function connection() {
        $conn = "mysql:host=$this->host;dbname=$this->dbname;port=$this->port";
        return new PDO($conn, $this->user, $this->password, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $this->db_charset]);
    }

    public function select_data() {
        $conn = $this->connection();
        $default = $conn->prepare("SELECT * from usuario");
        $default->execute();
        return $default;
    }

    public function inserir($dados) {
        $conn = $this->connection();
        $sql = "INSERT INTO usuario (nome, telefone, cpf) value(?,?,?)";
        $st = $conn->prepare($sql);
        $arrayDados = [$dados['nome'], $dados['cpf'], $dados['telefone']];
        $st->execute($arrayDados);

        return $st;
    }

    public function recarregar($dados) {
        $conn = $this->connection();
        $sql = "UPDATE usuario SET 'nome' = ?, 'telefone' = ?, 'cpf' = ? WHERE id = ?";
        $st = $conn->prepare($sql);
        $arrayDados = [$dados['id']];
        $st->execute($arrayDados);

        return $st;
    }

    public function remover($dados) {
        $conn = $this->connection();
        $sql = "DELETE FROM usuario WHERE id= ?";
        $st = $conn->prepare($sql);
        $arrayDados = [$dados['id']];
        $st->execute($arrayDados);

        return $st;
    }

    public function find($dados) {
        $conn = $this->connection();
        $sql = "SELECT * FROM usaurio WHERE id = ?";
        $st = $conn->prepare($sql);
        $arrayDados = [$dados['id']];
        $st->execute($arrayDados);

        return $st;
    }