<?php

//including code for database conection
include 'pdo_conn.php';
//connecting to database
$conn = getConnection();
//after this point you are connected

//the UPDATE query for the database
$sql = 'DELETE FROM users WHERE id = :id';

//Using the bindParam you can pass values by Variables
$id = 4;

//You can also use this method, insted of use ? mark you can give a name for those paramaters you are passing in the $stmt
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if($stmt->execute()){
    echo 'User Deleted!';
}else{
    echo 'Error in try to delete user<strong>'. error_log($sql).'</strong>';
}