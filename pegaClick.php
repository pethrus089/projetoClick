<?php
include 'conexao.php';


$qtAdcionar = 1;
$Consulta = "SELECT qt FROM clicks";
$OBJconsulta = mysqli_query($conn, $Consulta);
$resultado = mysqli_fetch_assoc($OBJconsulta);
$qtExistente = $resultado["qt"];

if ($_GET["qt"]== 0){
    echo "Clicks até o momento: ".$qtExistente;
}else if ($_GET["qt"] !=="1") {
    echo "Não quebre meu codigo parceiro.";
}else{
$adcionaClick = "update clicks set qt=" . ($qtAdcionar + $qtExistente) . ";";
$OBJconsulta = mysqli_query($conn, $adcionaClick);
echo "Clicks até o momento: " . ($qtAdcionar + $qtExistente);
}

?>