<?php

session_start();
require_once("conectardb.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];}
/*$id = $_POST['id'];
*/
$deletar = "DELETE FROM cadastroCarros WHERE id = $id ";

$query_cadastros = mysqli_query($conn, $deletar) or die(mysqli_error($conn));

echo "$deletar"

//


//header('location: listagem.php');

?>