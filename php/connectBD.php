<?php
    //conexão ao banco de dados
    $conn = new mysqli('localhost', 'root', '', 'paivaautoeletricamecanica');

    if($conn->connect_errno){
        echo "falha na conexão: (".$conn->connect_errno.") ".$conn->connect_error;
    }

?>