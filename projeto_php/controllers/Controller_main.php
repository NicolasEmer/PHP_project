<?php
    include_once('Controller_produto.php');

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    
        if ($page === 'pagina_login') {
            header('Location: ../pages/login.php');
            exit();
        }
        elseif ($page === 'pagina_form') {
            produtoController::form();
            exit();
        }
        elseif ($page === 'pagina_registro') {
            produtoController::registrar();
            exit();
        }
        elseif ($page === 'pagina_ini_edit') {
            $id = $_GET['id'];
            produtoController::ini_editar($id);
            exit();
        }
        elseif ($page === 'pagina_listar') {
            produtoController::listar();
            exit();
        } elseif ($page === 'pagina_deletar') {
            $id = $_GET['id'];
            produtoController::deletar($id);
            exit();
        } elseif ($page === 'pagina_editar') {
            $id = $_GET['id'];
            produtoController::editar($id);
            exit();
        }if ($page === 'pagina_') {
            header('Location: Controller_.php');
            exit();
        } 
        else {
            header('Location: erro.php');
            exit();
        }
    } else {
        header('Location: erro.php');
        exit();
    }
    
?>
