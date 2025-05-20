<?php
require_once('config/db.php');
require_once('controller/articleController.php');

$db = new DATABASE();
$conn = $db->getConnection();
$article= new Article($conn);

$article->delete($_GET['id']);
header("Location:index.php");

?>