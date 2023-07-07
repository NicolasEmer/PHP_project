<?php
require_once("../models/Produto.php");
class produtoController{

    public static function form(){
        include '../pages/cad_produto.php';
    }

    public static function registrar(){

        $cadastrar = new Produto();
        
        $cadastrar->setNome($_POST['nome']);
        $cadastrar->setMarca($_POST['marca']);
        $cadastrar->setTamanho($_POST['tamanho']);

        $result = $cadastrar->cadastrar();
        if($result >= 1){
            echo "<script>alert('Registrado!');document.location='../pages/logou.php'</script>";
        }else{
            echo "<script>alert('Erro no registro!');history.back()</script>";
        }
    }

    public static function editar(){
        $editar = new Produto();

        $editar->setNome($_POST['nome']);
        $editar->setMarca($_POST['marca']);
        $editar->setTamanho($_POST['tamanho']);

        $editar->setId($_GET['id']);
        $result = $editar->editar();

        if($result == 1){
            echo "<script>alert('Atualizado!');document.location='../pages/logou.php'</script>";
        }else{
            echo "<script>alert('Erro ao atualizar!');history.back()</script>";
        }
    }

    public static function ini_editar($id){

        $carregar = new Produto();

        $carregar = $carregar->getById($id);

        if($carregar!=null){
            include ('../pages/ed_produto.php');
        } else {
            echo "<script>alert('Erro ao obter produto!');history.back()</script>";
        }

        

    }

    public static function listar(){
        $listar = new Produto();

        $listar->getAllProdutos();

        include ('../pages/listar_produto.php');
    }

    public static function deletar($id){
        $delete = new Produto();

        $result=$delete->deletar($id);
        if ($result){
            echo "<script>alert('Deletado com sucesso!');document.location='../pages/logou.php'</script>";
        } else {
            echo "<script>alert('Erro ao deletar produto!');history.back()</script>";
        }
    }

    
}
new produtoController();