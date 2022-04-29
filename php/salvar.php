<?php
    include"connectBD.php";
    //informaçoes do usuario
    $nome = $_POST['nome'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    //informaçoes do endereço
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    //informaçoes de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $conn ->query("INSERT INTO dono_veiculo (ID_Dono, Nome, Nasc, CPF, Telefone, CEP) VALUES ( default, '$nome', '$dt_nascimento', '$cpf', '$telefone', '$cep')");
    $conn ->query("INSERT INTO endereco(CEP, Rua, Numero) VALUES('$cep', '$rua', '$numero')");
    $conn ->query("INSERT INTO conta_site(Tipo_conta, Email, Senha, ID_Dono) VALUES (default, '$email', '$senha', default)");

    echo "Cadastro feito!!!";

    echo "$nome<br>$dt_nascimento<br>$cpf<br>$telefone<br>$rua<br>$numero<br>$cep<br>$email<br>$senha";

?>