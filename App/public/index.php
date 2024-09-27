<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Binamic SRL</h1>
    <h5>Introduci i tuoi dati</h5>

    <form action="/submit" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cognome">Cognome:</label><br>
        <input type="text" id="cognome" name="cognome" required><br><br>

        <label for="indirizzo">Indirizzo:</label><br>
        <input type="text" id="indirizzo" name="indirizzo" required><br><br>

        <label for="cap">CAP:</label><br>
        <input type="text" id="cap" name="cap" required><br><br>

        <label for="comune">Comune:</label><br>
        <input type="text" id="comune" name="comune" required><br><br>

        <label for="provincia">Provincia:</label><br>
        <input type="text" id="provincia" name="provincia" required><br><br>

        <label for="mitente">Mitente:</label><br>
        <select id="mitente" name="mitente" required>
            <option value="">--Seleccione una opción--</option>
            <option value="empresa">Empresa</option>
            <option value="persona_fisica">Persona Física</option>
            <option value="entidad_gobierno">Entidad de Gobierno</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

    
