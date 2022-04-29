<?php
    include "connectBD.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $emailbd = '';
    $senhabd = '';

    $dados =  $conn->query("SELECT * FROM conta_site WHERE Email = '$email' AND Senha = '$senha'");

    while ($linha = mysqli_fetch_array($dados)){
        $emailbd = $linha['Email'];
        $senhabd = $linha['Senha'];
    }

    if($email == $emailbd AND $senha == $senhabd){
        echo "conta existente";
    }
    else{
        echo "conta inexistente";
    }

?>