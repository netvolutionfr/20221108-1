<?php
$password1 = $_POST['password1'];

// Write data in file
$fp = fopen('password.txt', 'w');
fwrite($fp, $password1);
fclose($fp);
