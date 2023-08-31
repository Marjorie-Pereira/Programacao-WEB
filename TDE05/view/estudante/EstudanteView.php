<?php $listaEstudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Estudantes</title>
</head>
<body>
    <h2 class="text-center">Semana da Acessibilidade</h2>
    <div class="imagem col-md-6 mx-auto">
        <img src = "acessibilidade.jpg" alt="imagem contendo desenho de pessoas portadoras de diferentes deficiências." class="mx-auto d-block img-fluid">
        
    </div>
    
    <table class="table table-hover container col-md-6">
        <h3 class="text-center pt-3">Lista de Estudantes</h3>
        <br class="col-md-6">
        <a href="/aula3/?controller=Estudante&acao=salvar" class="btn btn-success ">Cadastrar Estudante</a>
        </br>
        <tr>
            <th>Nome:</th>
            <th>Idade:</th>  
        </tr>
        <?php foreach ($listaEstudantes as $estudante) { ?>
           
           <tr>
                <td><?php echo $estudante["nome"]; ?></td>
                <td><?php echo $estudante["idade"]; ?> anos</td>
           </tr>
        <?php } ?>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>