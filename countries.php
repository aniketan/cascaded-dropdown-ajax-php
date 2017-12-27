<?php
require_once("db-config.php");

$sth = $dbh->prepare("SELECT * FROM countries");
$sth->execute();

$result = $sth->fetchAll();
echo json_encode($result);die;
?>