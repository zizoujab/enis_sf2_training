<?php
$uri = $_SERVER['REQUEST_URI'];
$foo = $_GET['foo'];

header('Content-type: text/html');
echo '<h1>The URI requested is: '.$uri.'</h1>';
echo '<h1> The value of the "foo" parameter is: '.$foo.'</h1>';
?>