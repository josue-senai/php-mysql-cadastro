<?php
if (isset($_POST["submit"])) {
	include_once("config.php");

	$data_agenda = $_POST["data_agenda"];
	$hora = $_POST["hora"];
	$procedimento = $_POST['procedimento'];
	$idPaciente = $_POST['idPaciente'];
	$idMedico = $_POST['idMedico'];

	$response = mysqli_query($connection, "INSERT INTO agendamento (data_agenda, hora, procedimento, id_paciente, id_medico) VALUES ('$data_agenda', '$hora', '$procedimento', '$idPaciente', '$idMedico')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="form.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Agendamento</title>
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
					<li class="nav-item">
						<a class="nav-link" href="cadastro.php">Cadastro</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="agendamento.php">Agendamento <span
								class="sr-only">(current)</span></a>
					</li>

				</ul>
			</div>
		</nav>
	</header>

	<main>
		<form action="agendamento.php" method="post">
			<div class="dados">
				<label for="data_agenda">Data do Agendamento:</label>
				<input type="date" id="data_agenda" name="data_agenda" required>

				<label for="hora">Hora:</label>
				<input type="time" id="hora" name="hora" required>

				<label for="procedimento">Procedimento:</label>
				<input type="text" id="procedimento" name="procedimento" required>

				<label for="nomePaciente">id do Paciente:</label>
				<input type="text" id="nomePaciente" name="idPaciente" required>

				<label for="nomeMedico">id do Médico:</label>
				<input type="text" id="nomeMedico" name="idMedico" required>
			</div>

			<input type="submit" value="Agendar" name="submit">
		</form>

	</main>
</body>

</html>