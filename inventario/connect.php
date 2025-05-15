<?php
$url = 'localhost';
$user = 'root';
$password = '';
$bd = 'inventario';

$con = new mysqli($url, $user, $password, $bd);
if($con){
    echo "Conexão bem sucedida!";
}else{
    echo "Erro na conexão!";
}
?>