<?php
if(isset($_SESSION["profil"])) header("Location: index.php?page=login");

$_SESSION['nav']->a->id = 0;
$_SESSION['nav']->b->id = 0;
$_SESSION['nav']->c->id = 0;

$periodes = array();

$stmt = $con->prepare('SELECT * FROM periode');
$stmt->execute();

while ($periode = $stmt->fetchObject()) {
	array_push($periodes, $periode);
}

require_once('app/views/includes/header.php');
require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');
require_once('app/views/includes/footer.php');