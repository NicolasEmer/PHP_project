<?php


date_default_timezone_set('America/Sao_Paulo');


define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','root');
define('BD_BANCO','usuario2');

class Conexao {

    protected $mysqli;

    public function __construct() {
        $this->conexao();
    }

    private function conexao() {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }

    public function setProduto($nome, $marca, $tamanho) {
        $result = $this->mysqli->prepare("INSERT INTO produtos (`nome`, `marca`,`tamanho`) VALUES (?,?,?)");
        $result->bind_param("ssi", $nome, $marca, $tamanho);
        if ($result->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProduto($nome, $marca, $tamanho, $id){
        $result = $this->mysqli->prepare("UPDATE produtos SET nome=?, marca=?, tamanho=? WHERE id = ?");
        $result->bind_param("ssii", $nome, $marca, $tamanho, $id);
        if ($result->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function getProdutos(){
        $result = $this->mysqli->query("SELECT * FROM produtos");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }

    public function deleteProduto($id){
        $result = $this->mysqli->prepare("DELETE FROM produtos WHERE id = $id");
        if ($result->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdContr($id){
        $result = $this->mysqli->query("SELECT * FROM produtos WHERE id = $id");

        return $result->fetch_array(MYSQLI_ASSOC);
    }
    public function getUsuario() {
        $result = $this->mysqli->query("SELECT * FROM informacoes");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }

    

}

?>
