<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carros</title>
</head>
<body>
    <h1>Cadastrar os carros</h1>
    <form action="enviarcadastro.php" method="post" accept-charset="utf-8">
        <label for="nomeProprietario">Nome do proprietário:</label>
        <input type="text" name="nome_proprietario" id="nome_proprietario" required> <br>

        <label for="contatoProprietario">Contato:</label>
        <input type="text" name="contatoProprietario" id="contatoProprietario" required> <br>

        <label for="nomecarro">Modelo do carro:</label>
        <input type="text" name="nomecarro" id="nomecarro" required> <br>
        
        <label for="placacarro">Placa do carro:</label>
        <input type="text" name="placacarro" id="placacarro" required pattern="[A-Z]{3}-[0-9]{1}[0-9A-Z]{1}[0-9]{2}"> <br>
        
        <input type="submit" name="cadastre" value="Cadastrar">
    </form> 
</body>
</html>
