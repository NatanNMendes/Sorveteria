<?php
function retornoImg($url){
    include "conecta.php";
    $sql = "SELECT * from pizzas where urlimagem = '$url'";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados['urlimagem'];
}
?>