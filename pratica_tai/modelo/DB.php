<?php
include_once 'config.php';
class DB
{
    public static function connection()
    {
        $str_conn = "mysql:host=" . config::DB_HOST . ";dbname=" . config::DB_NOME;
        return new PDO(
            $str_conn,
            config::DB_USUARIO,
            config::DB_SENHA,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . config::DB_CHARSET)
        );
    }
    public static function selectAll($tabela, $orderby = "")
    {
        $conn = self::connection();
        $stmt = $conn->prepare("SELECT * FROM $tabela $orderby");
        $stmt->execute();
        return $stmt;
    }
    public static function selectFind($tabela, $id)
    {
        $sql = "SELECT * FROM $tabela WHERE id = $id;";
        $conn = self::connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchObject();
    }
    public static function insert($tabela, $dados)
    {
        $sql = "INSERT INTO $tabela(";
        $flag = 0;
        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= $campo;
            } else {
                $sql .= ", $campo";
            }
            $flag = 1;
        }
        $sql .= ") VALUES(";
        $flag = 0;
        $arrayValue = [];
        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= "?";
                $flag = 1;
            } else {
                $sql .= ", ?";
            }
            $arrayValue[] = $valor;
        }
        $sql .= ");";
        $conn = self::connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($arrayValue);
        return $stmt;
    }
    public static function update($tabela, $dados)
    {
        $id = $dados['id'];
        $sql = "UPDATE $tabela SET ";
        $flag = 0;
        $arrayValue = [];
        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= "$campo='$valor'";
                $flag = 1;
            } else {
                $sql .= ", $campo='$valor'";
            }
        }
        $sql .= " WHERE id = $id;";
        $conn = self::connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($arrayValue);
        return $stmt;
    }
    public static function delete($tabela, $id)
    {
        $conn = self::connection();
        $stmt = $conn->prepare("DELETE FROM $tabela WHERE id = $id;");
        $stmt->execute();
        return $stmt;
    }
}

$obj = new DB;