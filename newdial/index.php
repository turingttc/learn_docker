<?php
require_once 'medoo.php';
$db = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'u5YKmzH9ZSlJbswB',
    'server' => '10.10.26.58',
    'port' => 3306,
    'username' => 'u9c4QxfSIY5d8uws',
    'password' => 'p53QTRxbq7nhouHZG',
    'charset' => 'utf8'
]);

$user = $_GET['user'];
$result = $db->select('white',[
    'deadline'
],[
    'user'=>$user
]);
echo json_encode($result[0]);