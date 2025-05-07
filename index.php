<?php
    require_once 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados

    $sql = "SELECT * FROM personagem ORDER BY nome ASC"; // Consulta SQL para selecionar todos os personagens ordenados pelo nome
    $stmt = $pdo->query($sql);// Executa a consulta

?>

<!DOCTYPE html>
<html lang="en">

<img src="" alt=""width>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <?php
        while ($row = $stmt->fetch()) {
            echo "<img src=\"" . $row['img'] . "\" alt=\"\"><br>";
            echo "Rarity: " . $row['raridade'] . "<br>";
            echo "Name: " . $row['nome'] . "<br>";
            echo "Element: " . $row['elemento'] . "<br>";
            echo "Path: " . $row['caminho'] . "<hr>";
        }
    ?>


</body>

</html>