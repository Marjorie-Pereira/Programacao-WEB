<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/" . FOLDER . '/model/EstudanteModel.php';

class EstudanteController
{
    const CONTROLLER_FOLDER = '/estudante';
    
    public function listar(){
        //Instanciar a model
        //Chamar o metodo listar na model
        $estudanteModel = new EstudanteModel();
        $listaEstudantes = $estudanteModel->listarModel();
        $_REQUEST['estudantes'] = $listaEstudantes;
        //Renderizar a view
        //AQUI
        require_once $_SERVER['DOCUMENT_ROOT'] . "/" . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteView.php';
    }

    public function salvar(){
        //Instanciar a model
        //Chamar o metodo salvar na model

        if ($_SERVER['REQUEST_METHOD'] == 'GET' ){
            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteForm.php';
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $estudanteModel = new EstudanteModel();
            $estudanteModel->salvarModel($nome, $idade);
            header('Location: http://localhost/' . FOLDER . '/?controller=Estudante&acao=listar');
            exit();
        }
    }   
}
