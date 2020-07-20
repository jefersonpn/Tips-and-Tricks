<?php

$dns = 'mysql:host=localhost;dbname=xray';
$username = 'root';
$password = '';

try 
{
    $pdo = new PDO($dns, $username, $password);

} catch (PDOException $ex)
     {
        echo 'Error message: <strong>'.$ex->getMessage().'</strong>';
     }

