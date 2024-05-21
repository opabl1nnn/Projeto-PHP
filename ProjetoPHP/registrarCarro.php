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
<div class="container-fluid">
    <div class="row">
        <div class="col">
        <?php
        require 'conectaBanco.php';
        
        $carro = $_POST['carro'];
        $modelo = $_POST['modelo'];
        $desc = $_POST['descricao'];
        if(empty($carro)){
            echo "<p>Todos os campos devem ser preenchidos!</p>";
        }else{
            
            $sql = "INSERT INTO Carros(carro, modelo, descricao) VALUES 
                                            ('$carro','$modelo', '$desc')";
            $banco->query($sql); 
            if($banco->affected_rows >= 1){
                echo "<p>$carro cadastrado com sucesso!</p>";
            }else{
                echo "Erro ao cadastrar $carro no banco de dados!";
            }
        }
    
        $banco->close();
        ?>
    </div>
    </div>
    </div>
</body>
</html>
