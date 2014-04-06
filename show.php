<?php
// show.php
require_once 'model.php';

$row = get_post_by_id($_GET['id']);

require 'templates/show.php';
?>