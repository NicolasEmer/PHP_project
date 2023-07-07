<?php
require_once("../models/Usuario.php");
class loginController{

    private $logar2;

    public function __construct(){
        $this->logar2 = new Usuario();
        $this->logar();
    }

    private function logar(){
        $this->logar2->setNome($_POST['nome']);
        $this->logar2->setSenha($_POST['senha']);

        $result = $this->logar2->logar_verif();
        var_dump($result);
        if($result == 1){
            echo "<script>alert('Logado!');document.location='../pages/logou.php'</script>";
        }else{
            echo "<script>alert('Erro ao logar!');history.back()</script>";
        }
    }
    
}
new loginController();