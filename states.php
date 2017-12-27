<?php
require_once("db-config.php");

$sth = $dbh->prepare("SELECT * FROM states where country_id ='".$_REQUEST['country_id']."'");
$sth->execute();

$result = $sth->fetchAll();
echo json_encode($result);die;
?>