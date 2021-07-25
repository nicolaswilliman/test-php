<?php

$conn = new mysqli('db', 'root', null, 'db');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo 'Success';

exit;
