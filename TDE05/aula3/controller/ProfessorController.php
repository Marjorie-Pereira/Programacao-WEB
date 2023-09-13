<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/" . FOLDER . '/model/ProfessorModel.php';

class ProfessorController
{
    const CONTROLLER_FOLDER = '/professor';
    
    public function listar(){
        //Instanciar a model
        //Chamar o metodo listar na model
        $professorModel = new ProfessorModel();
        $professores = $professorModel->listarModel();
        $_REQUEST['professores'] = $professores;
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
            $professorModel = new ProfessorModel();
        $professorModel->salvarModel($nome, $idade);
        header('Location: http://localhost/' . FOLDER . '/?controller=Professor&acao=listar');
        exit();
        }
    }   

    public function editar(){

        if ($_SERVER['REQUEST_METHOD'] == 'GET' ){
            $id = $_GET["id"];

            $professorModel = new ProfessorModel();
            $professores = $professorModel->buscarPeloId($id); //se der erro mudar professores para professor

            $_REQUEST['professor'] = $professores;
            

            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorFormEdit.php';
        }   else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET["id"];
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $professorModel = new ProfessorModel();
            $professorModel->atualizarModel($id, $nome, $idade);
            header('Location: http://localhost/' . FOLDER . '/?controller=Professor&acao=listar');
            exit();
        }
    } 

    public function excluir(){
        $id = $_GET["id"];

        $professorModel = new ProfessorModel();

        $professorModel->excluirModel($id);

        header('Location: http://localhost/' . FOLDER . '/?controller=Professor&acao=listar');
        exit();
    }






}



