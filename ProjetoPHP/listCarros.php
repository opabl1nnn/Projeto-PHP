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
            <div class="col m-0 p-0 text-center">
                <?php
                include 'telamenu.php';
                ?>
                <?php
                require 'conectaBanco.php';
                $sql = "SELECT * FROM Carros";
                $resultado = mysqli_query($banco, $sql); 
                $banco->close();
                ?>
                <table class="table table-hover">
                    <h1>Lista de Carros Cadastrados</h1>
                    <thead>
                        <th scope="col">Carro</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Descrição</th>
                    </thead>
                    <tbody>
                        <?php
                        if($resultado){
                            while($linha = mysqli_fetch_assoc($resultado)){
                                $carro = $linha['Carro'];
                                $modelo = $linha['Modelo'];
                                $desc = $linha['descricao'];
                                echo "<tr> 
                                <th scope='row'>$carro</th>
                                <td>$modelo</td>
                                <td>$desc</td>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
