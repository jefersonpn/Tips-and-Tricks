<?php
//including code for database conection
include 'pdo_conn.php';
//connecting to database
$conn = getConnection();
//after this point you are connected

//the query for the database
$sql = 'INSERT INTO users (username, password, email, status) VALUES (:username,:password,:email,:status)';

//here we are preparing to insert the values using $stmt variable
//for which ? mark you need to create a command line using bindValue: where it use a value as a second paramater.
//$stmt = $conn->prepare($sql);
//$stmt->bindValue(1,'calebpn');
//$stmt->bindValue(2, 'intellp4');
//$stmt->bindValue(3, 'jefersonpn@gmail.com');
//$stmt->bindValue(4, 1);

//Using the bindParam you can pass values by Variables
$username = 'admin';
$password = 'admin';
$email = 'jefersonpn@gmail.com';
$status = '1';

$stmt = $conn->prepare($sql);
$stmt->bindParam(1,$username);
$stmt->bindParam(2, $password);
$stmt->bindParam(3, $email);
$stmt->bindParam(4, $status);

//You can also use this method, insted of use ? mark you can give a name for those paramaters you are passing in the $stmt
//$stmt = $conn->prepare($sql);
//$stmt->bindParam(':username',$username);
//$stmt->bindParam(':password', $password);
//$stmt->bindParam(':email', $email);
//$stmt->bindParam(':status', $status);

if($stmt->execute()){
    echo 'User inserted!';
}else{
    echo 'Error in try to insert user'. error_log($sql);
}



     




?>