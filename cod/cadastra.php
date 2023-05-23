<?php
        include "conecta.php";

        $nome = $_POST['nomesorvete'];
        $preco = $_POST['preco'];
        $imagem = $_POST['urlimagem'];

        $sql = "INSERT INTO pizzas (nomepizza, preco, urlimagem) VALUES ('$nome','$preco','$imagem')";

        $query = $mysqli->query($sql);
        ?>
