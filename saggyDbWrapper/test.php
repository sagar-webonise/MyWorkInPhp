<?php

require_once "SaggyDbWrapper.php";

$dbObj = SaggyDbWrapper::getINstance();
$result = $dbObj->select(array('lname'))
->from('users')
->where(array('city'=>'City7'))
->get();
print_r($result);
?>

