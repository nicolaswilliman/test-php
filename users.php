<?php

$conn = new mysqli('db', 'root', null, 'db');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$age = $_POST['edad'];

$command = "INSERT INTO Persons (LastName, FirstName, Age)
VALUES ('${apellido}', '${nombre}', ${age})";

if ($conn->query($command) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $command . "<br>" . $conn->error;
}

$conn->close();

exit;
