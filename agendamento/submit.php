<?php 
header("Content-type: application/json");

$data = array($_POST);

return json_encode($data);