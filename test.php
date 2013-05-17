<?php

require_once "SaggyDbWrapper.php";

$dbObj = new SaggyDbWrapper('localhost','root','webonise6186','tta-cms');
$dbObj->select(array('name','email'));
$dbObj->from('users');
?>

