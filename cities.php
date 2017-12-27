<?php
require_once("db-config.php");

$sth = $dbh->prepare("SELECT * FROM cities where state_id ='".$_REQUEST['state_id']."'");
$sth->execute();

$result = $sth->fetchAll();
echo json_encode($result);die;
?>