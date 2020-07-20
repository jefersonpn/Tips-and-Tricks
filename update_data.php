<?php

//including code for database conection
include 'pdo_conn.php';
//connecting to database
$conn = getConnection();
//after this point you are connected

//the UPDATE query for the database
$sql = 'UPDATE users SET id = :id, username = :username, password = :password, email = :email, status = :status WHERE id = :id';

//Using the bindParam you can pass values by Variables
$id = '4';
$username = 'admin';
$password = '123';
$email = 'jefersonpn@gmail.com';
$status = '1';

//You can also use this method, insted of use ? mark you can give a name for those paramaters you are passing in the $stmt
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':status', $status);

if($stmt->execute()){
    echo 'User updated!';
}else{
    echo 'Error in try to update user'. error_log($sql);
}

