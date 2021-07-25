<?php

$mail = $_POST['mail'];
$password = $_POST['password'];

$user = getUserFromDB();

if ($user->mail === $mail && $password === $user->password) {
  $_SESSION['authenticated'] = $user;
  echo 'Success';
} else {
  echo 'Failed';
}

exit;
