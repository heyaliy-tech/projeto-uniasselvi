<?php

include "conectardb.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];}
/*$id = $_POST['id'];

$buscar_cadastros = "DELETE FROM cadastrocarros WHERE id = $id ";*/

echo "$id"

//$query_cadastros = mysqli_query($conn, $buscar_cadastros) or die(mysqli_error($conn));


//header('location: listagem.php');

?>