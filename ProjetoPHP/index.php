<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Concessionaria PHP</title>
</head>
<body>
<div class="container-fluid m-0">
    <?php
    include 'telamenu.php';
    ?>
<form action="registrarCarro.php" method="post" class="col-12 p-3 text-center">
            <div class="mb-3">
                <label class="form-label" for="carro">Carro</label>
                <input class="form-control" type="text" name="carro" required>
            </div>
            <div>
            <label for="modelo" class="form-label">Qual o Modelo do Carro?</label>
            <select id="modelo" name="modelo" class="form-select">
            <option value="sedan">Sedan</option>
            <option value="suv">SUV</option>
            <option value="esportivo">Esportivo</option>
            <option value="eco">Economico</option>
            <option value="camionete">Camionete</option>
        </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Adicionar no banco de dados" class="btn btn-dark">
    </form>
    </div>
</body>
</html>