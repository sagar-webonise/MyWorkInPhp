<?php

require_once "SaggyDbWrapper.php";

$dbObj = SaggyDbWrapper::getINstance();
$result = $dbObj->select(array('email'))
->from('users')
->where(array('first_name'=>'sagar','last_name'=>'shirsath','gender'=>'m'))
->get();
print_r($result);
?>

