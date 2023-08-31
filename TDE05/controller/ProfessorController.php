<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/" . FOLDER . '/model/ProfessorModel.php';

class ProfessorController
{
    const CONTROLLER_FOLDER = '/professor';
    
    public function listar(){
        //Instanciar a model
        //Chamar o metodo listar na model
        $professorModel = new EstudanteModel();
        $professores = $professorModel->listarModel();
        $_REQUEST['estudantes'] = $professores;
        //Renderizar a view
        //AQUI
        require_once $_SERVER['DOCUMENT_ROOT'] . "/" . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorView.php';
    }

    public function salvar(){
        //Instanciar a model
        //Chamar o metodo salvar na model

        if ($_SERVER['REQUEST_METHOD'] == 'GET' ){
            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorForm.php';
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $professorModel = new EstudanteModel();
        $professorModel->salvarModel($nome, $idade);
        header(' Location: http://localhost/' . FOLDER . '/?controller=Professor&acao=listar');
        exit();
        }
    }   
}
