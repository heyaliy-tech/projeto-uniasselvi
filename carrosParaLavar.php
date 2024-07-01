<?php
session_start();

include_once("conectardb.php");

$sql = "SELECT * FROM cadastrocarros WHERE carroLimpo = 0";

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
                <th scope="col"></th>
                <td>
    
            </tr>
        </thead>
        <tbody>
                <?php
                    while($user_data = mysqli_fetch_array($result))
                    {
                        echo"<tr>";
                        echo "<td>".$user_data['proprietario']. "</td>";
                        echo "<td>".$user_data['contato']. "</td>";
                        echo "<td>".$user_data['carro']. "</td>";
                        echo "<td>".$user_data['placa']. "</td>";
                        echo "<td>".$user_data['id']. "</td>";
                        echo '<td><a href="editaRegistro.php?id=' . $user_data['id'] . '" class="btn btn-primary">Carro Pronto</a></td>';
                        echo '<td><a href="excluirRegistro.php?id=' . $user_data['id'] . '" class="btn btn-danger">Excluir</a></td>';
                        echo "</tr>";
                    }

                ?>
        </tbody>
</table>

    </div>
</body>
</html>