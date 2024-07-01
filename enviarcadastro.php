<?php
session_start();
require_once("conectardb.php");

if (isset($_POST ['cadastre'])){
    if(!empty($_POST['nomeCarro']) || !empty($_POST['placaCarro']) || !empty($_POST['nomeProprietario'] ) || !empty($_POST['contatoProprietario'] ))
        $proprietario=$_POST ['nomeProprietario'];
        $contato=$_POST ['contatoProprietario'];
        $carro=$_POST ['nomeCarro'];
        $placa=$_POST['placaCarro'];
        
        $comando="INSERT INTO cadastroCarros (proprietario, contato, carro, placa) VALUES ('$proprietario', '$contato', '$carro', '$placa')";
        $cadastre=mysqli_query($conn,$comando);

        if($cadastre){
        echo "Sucesso!";
            header("location:cadastrarCarros.php");
        
        }else 
          
        
            header("location:cadastrarCarros.php");
        
        
}


?>