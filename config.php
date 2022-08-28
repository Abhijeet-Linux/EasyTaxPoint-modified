<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'easytaxpoint');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn == false) {
    dir('Error: Cannot connect to database');
}

?>

<!-- INSERT INTO `articles` (`serial no.`, `title`, `description`, `created_at`) VALUES ('1', 'hello world', 'hello world is subh to start something new.', current_timestamp()); -->