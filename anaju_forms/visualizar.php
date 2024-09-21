<?php
// Configurações do banco de dados
$host = 'localhost';
$user = 'root';
$password = ''; 
$database = 'IPI_2';

// Conectar ao banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Verificar se o ID foi passado via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consultar dados do usuário
    $sql = "SELECT * FROM usuario WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    // Verificar se o usuário existe
    if ($usuario = mysqli_fetch_assoc($result)) {
        // Incluir cabeçalho
        ?>
        <?php include 'html/header.html'; ?>
        
        <div class="container mt-4">
            <h1>Registro <?php echo htmlspecialchars($usuario['id']); ?></h1>
            <dl class="row">
                <dt class="col-sm-3">Nome:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['nome']); ?></dd>
                
                <dt class="col-sm-3">Data de Nascimento:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars(date("d/m/Y", strtotime($usuario['nascimento']))); ?></dd>

                <dt class="col-sm-3">E-mail:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['email']); ?></dd>

                <dt class="col-sm-3">Telefone:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['telefone']); ?></dd>

                <dt class="col-sm-3">CEP:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['cep']); ?></dd>

                <dt class="col-sm-3">Endereço:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['endereco']); ?></dd>

                <dt class="col-sm-3">Número:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['numero']); ?></dd>
                
                <dt class="col-sm-3">Complemento:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['complemento']); ?></dd>

                <dt class="col-sm-3">Bairro:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['bairro']); ?></dd>
                
                <dt class="col-sm-3">Cidade:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['cidade']); ?></dd>

                <dt class="col-sm-3">Estado:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['estado']); ?></dd>

                <dt class="col-sm-3">CPF:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['cpf']); ?></dd>

                <dt class="col-sm-3">RG:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['rg']); ?></dd>

                <dt class="col-sm-3">Assunto:</dt>
                <dd class="col-sm-9"><?php echo htmlspecialchars($usuario['assunto']); ?></dd>

                <dt class="col-sm-3">Mensagem:</dt>
                <dd class="col-sm-9"><?php echo nl2br(htmlspecialchars($usuario['mensagem'])); ?></dd>
            </dl>

            <div id="actions" class="row mt-3">
                <div class="col-md-12">
                    <a href="registros.php" class="btn btn-custom">Voltar</a>
                </div>
            </div>
        </div>

        <?php
    } else {
        echo "<div class='alert alert-danger'>Usuário não encontrado.</div>";
    }

    // Fechar a declaração
    mysqli_stmt_close($stmt);
} else {
    echo "<div class='alert alert-warning'>ID não especificado.</div>";
}

// Fechar a conexão
mysqli_close($conn);
?>
