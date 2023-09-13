<?php $professores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Professores</title>
</head>
<body>
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/" . FOLDER . '/view/navbar.php'; ?>
    <h2 class="text-center">Semana da Acessibilidade</h2>
    <div class="imagem col-md-6 mx-auto">
        <img src = "acessibilidade.jpg" alt="imagem contendo desenho de pessoas portadoras de diferentes deficiências." class="mx-auto d-block img-fluid">
        
    </div>
    
    <table class="table table-hover container col-md-6">
        <h3 class="text-center pt-3">Professores</h3>
        
        <tr>
            <th>#</th>
            <th>Nome:</th>
            <th>Idade:</th>  
        </tr>
        <?php foreach ($professores as $professorAtual) { ?>
           
           <tr>
                <td><?php echo $professorAtual["id"]; ?></td>
                <td><?php echo $professorAtual["nome"]; ?></td>
                <td><?php echo $professorAtual["idade"]; ?> anos</td>
                <td>
                  <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=editar&id=<?php echo $professorAtual['id'];?>" class="btn btn-success">Editar</a>
                  <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=excluir&id=<?php echo $professorAtual['id'];?>" class="btn btn-success">Excluir</a>
                </td>
           </tr>
        <?php } ?>
    </table>
    <br class="col-md-6">
    <a href="/aula3/?controller=Professor&acao=salvar" class="btn btn-success mx-auto d-block col-md-3">Cadastrar Professor</a>
    </br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>