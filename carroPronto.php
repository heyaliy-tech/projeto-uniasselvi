<?php

session_start();
require_once("conectardb.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];}
/*$id = $_POST['id'];
*/
$buscar_cadastros = "UPDATE cadastroCarros set carroLimpo=1 where id=$id;";

$query_cadastros = mysqli_query($conn, $buscar_cadastros) or die(mysqli_error($conn));

echo "$buscar_cadastros"
?>