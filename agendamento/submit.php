<?php 
print_r($_POST);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pico_solar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_agendamento (solicitante, email, telefone, id_servico, id_horario, id_data)
VALUES ('$_POST[solicitante]', '$_POST[email]', '$_POST[telefone]', '$_POST[id_servico]', '$_POST[id_horario]','$_POST[id_data]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


return json_encode($data);