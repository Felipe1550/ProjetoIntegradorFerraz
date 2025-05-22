<?php
include 'database.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlquery = mysqli_query($conexao, "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'");

if (mysqli_num_rows($sqlquery) <=0) {
    echo "<script>
        alert('Login inválido');
        window.location.href = 'entrar.php'; // Redireciona para a página 'entrar.php'
    </script>";
} else {
    echo "Login bem-sucedido!";
}
?>
