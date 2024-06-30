<?php
session_start();
require_once("conectardb.php");

if (isset($_POST ['cadastre'])){
    if(!empty($_POST['nomecarro']) || !empty($_POST['placacarro'] ))
        $contato=$POST ['nome_proprietario'];
        $proprietario=$POST ['contatoProprietario'];
        $carro=$_POST ['nomecarro'];
        $placa=$_POST['placacarro'];

        $comando="INSERT INTO cadastrocarros (carro, placa, proprietario, contato) VALUES ('$carro', '$placa', '$proprietario', '$contato')";
        $cadastre=mysqli_query($conn,$comando);

        if($cadastre){
          
            header("location:cadastrarcarros.php");
        
        }else 
          
        
            header("location:cadastrarcarros.php");
        
        
}


?>