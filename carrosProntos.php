<?php
session_start();

include_once("conectardb.php");

$sql = "SELECT * FROM cadastrocarros WHERE carroLimpo = 1";

$result = $conn ->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros para serem lavados</title>
</head>
<body>
    <div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Proprietário</th>
                <th scope="col">Contato</th>
                <th scope="col">Carro</th>
                <th scope="col">Placa</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['proprietario']. "</td>";
                        echo "<td>".$user_data['contato']. "</td>";
                        echo "<td>".$user_data['carro']. "</td>";
                        echo "<td>".$user_data['placa']. "</td>";
                        echo '<td><button type="button" class="btn btn-danger">Excluir</button></td>';
                        echo "</tr>";
                    }

                ?>
        </tbody>
</table>

    </div>
</body>
</html>