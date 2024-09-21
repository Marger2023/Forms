<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IPI_2";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento']; 
$bairro = $_POST['bairro'];       
$cidade = $_POST['cidade'];         
$estado = $_POST['estado'];           
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$stmt = $conn->prepare("INSERT INTO usuario (nome, nascimento, email, telefone, cep, endereco, numero, complemento, bairro, cidade, estado, cpf, rg, senha, assunto, mensagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssssssssss", $nome, $nascimento, $email, $telefone, $cep, $endereco, $numero, $complemento, $bairro, $cidade, $estado, $cpf, $rg, $senha, $assunto, $mensagem);

    if ($stmt->execute()) {
        echo "<script>
                var myModal = new bootstrap.Modal(document.getElementById('successModal'), {});
                myModal.show();
                setTimeout(function() {
                    window.location.href = '../index.html';
                }, 3000);
              </script>";
    } else {
        echo "Erro: " . $stmt->error;
    }

$stmt->close();
$conn->close();
?>
