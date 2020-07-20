<?php

include 'pdo_conn.php';

$conn = getConnection();

$sql = "SELECT * FROM users"; // WHERE id = :id"; //query which will be executed

$stmt = $conn->prepare($sql);
//$stmt->bindValue(':id', 1);//If you need to get a particular data, like only one user
$stmt->execute();//executing query

$result = $stmt->fetchAll();//getting all the data in the $result variable

foreach ($result as $value) //view for the values retrive form the database.
{
    echo 'Id: <strong>'.$value['id'].'</strong><br />';    
    echo 'Username: <strong>'.$value['username'].'</strong><br />';
    echo 'Password: <strong>'.$value['password'].'</strong><br />';
    echo 'Email: <strong>'.$value['email'].'</strong><br />';
    echo 'Status: <strong>'.$value['status'].'</strong><br />';
    echo '<br />';
}

