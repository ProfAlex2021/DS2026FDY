<?php
    $nome = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];
    require_once 'conexaoBD.php';
    $sql = "SELECT * FROM usuario WHERE nome = '" . $nome . "';";
    $resultado = $conexao->query($sql);
    //echo $sql;
    $linha = mysqli_fetch_array($resultado);
    if ($linha != null) {
        if ($linha['senha'] == $senha) {
            echo '
            <a href="principal.php">
                <h1 class="w3-button w3-teal">' . $nome . ', Seja Bem-Vinda! </h1>
            </a> ';
        } else {
            echo '
            <a href="index.php">
                <h1 class="w3-button w3-teal">Login Inválido! </h1>
            </a> ';
        }
    } else {
        echo '
        <a href="index.php">
            <h1 class="w3-button w3-teal">Login Inválido! </h1>
        </a> ';
    }
    $conexao->close();