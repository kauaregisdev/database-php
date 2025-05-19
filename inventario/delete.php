<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once "connect.php";
        $sql = "DELETE FROM usuario WHERE codigo = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("d", $id);
        if($stmt->execute()){
            header("location:read.php");
        }
    }else{
        echo "Erro: ".$stmt->error;
    }
?>