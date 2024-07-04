<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carros</title>
    <link rel="stylesheet" href="styleCadastro.css">
</head>
<body>
    <h1>Cadastrar os carros</h1>
    <div class="containerFormulario">
     <form action="enviarCadastro.php" method="post" accept-charset="utf-8">

        <label for="nomeProprietario">Nome do proprietário:</label>
        <input type="text" name="nomeProprietario" id="nomeProprietario" required placeholder="Ex: João da Silva"> <br>

        <label for="contatoProprietario">Contato:</label>
        <input type="text" name="contatoProprietario" id="contatoProprietario" required placeholder="Ex: (54)98765-4321"> <br>

        <label for="nomeCarro">Modelo do carro:</label>
        <input type="text" name="nomeCarro" id="nomeCarro" required placeholder="Ex: Corsa"> <br>
        
        <label for="placaCarro">Placa do carro:</label>
        <input type="text" name="placaCarro" id="placaCarro" required pattern="[A-Z]{3}-[0-9]{1}[0-9A-Z]{1}[0-9]{2}" placeholder="Ex: ABC-1234 ou ABC-1B34"> <br>
        
        <input type="submit" name="cadastre" value="Cadastrar" class="botaoCadastrar">
        <input type="reset" value="Limpar" onclick="exibirAlerta('Formulário limpo!')" class="botaoCadastrar">
    </form> 
    <div id="alerta">
    <script>
    function exibirAlerta(mensagem) {
        const alertaDiv = document.getElementById('alerta');
        alertaDiv.innerText = mensagem;
        alertaDiv.style.color = 'green';
    }
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        exibirAlerta('Cadastro com sucesso!');
    });
</script>
    </div>
    

</body>
</html>
