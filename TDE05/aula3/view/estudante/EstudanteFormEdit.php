<?php $estudante = $_REQUEST['estudante']; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/" . FOLDER . '/view/navbar.php'; ?>


    <div class="container">
        <form method="POST" action="/aula3/?controller=Estudante&acao=editar&id=<?php echo $estudante["id"]; ?>">
            <h1 class="pb-3">Editar Estudante</h1>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $estudante["nome"]; ?>" >
                
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $estudante["idade"]; ?>">
            </div>
            <button type="submit" class="btn btn-success">Editar</button>
            <!-- <a href="/aula3/?controller=Estudante&acao=listar"  type="submit" class="btn btn-primary">Salvar</a> -->
        </form>
    </div>
        



</body>
</html>