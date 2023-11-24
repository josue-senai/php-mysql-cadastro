<?php
if (isset($_POST["submit"])) {
    include_once("config.php");

    $role = $_POST["role-options"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];

    if ($role == 'paciente') {
        $data_nasc = $_POST['data-nasc'];
        $genero = $_POST['genero'];
        $endereco = $_POST['endereco'];
        $historico = $_POST['historico'];

        $response = mysqli_query($connection, "INSERT INTO paciente (nome, data_nasc, genero, endereco, telefone, historico_med) VALUES ('$nome', '$data_nasc', '$genero', '$endereco', '$telefone', '$historico')");
    } else if ($role == "medico") {
        $especialidade = $_POST["especialidade"];
        $email = $_POST["email"];

        $response = mysqli_query($connection, "INSERT INTO medico (nome, especialidade, telefone, email) VALUES ('$nome', '$especialidade', '$telefone', '$email')");
    } else if ($role == "enfermeiro") {
        $especialidade = $_POST["especialidade"];
        $email = $_POST["email"];

        $response = mysqli_query($connection, "INSERT INTO enfermeiro (nome, especializacao, telefone, email) VALUES ('$nome', '$especialidade', '$telefone', '$email')");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Cadastro <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agendamento.php">Agendamento</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <main>
        <form action="cadastro.php" method="post">
            <div class="role">
                <p>Escolha o cargo:</p>
                <input type="radio" name="role-options" id="paciente" value="paciente">
                <label for="paciente">paciente</label>
                <input type="radio" name="role-options" id="medico" value="medico">
                <label for="medico">medico</label>
                <input type="radio" name="role-options" id="enfermeiro" value="enfermeiro">
                <label for="enfermeiro">enfermeiro</label>
            </div>

            <div class="dados"></div>
        </form>
    </main>

    <script src="script.js"></script>

</body>

</html>