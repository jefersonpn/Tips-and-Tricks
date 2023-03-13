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

// insert and delete 
function insert_product($name, $brand, $model, $quantity)
{
    include 'connection1.php';

    //inserire questo codice dal php- INSERT query with positional placeholders
    $sql = "INSERT INTO prodotto (nome, marchio, modello, quantita) VALUES (?,?,?,?)";
    $pdo->prepare($sql)->execute([$name, $brand, $model, $quantity]);

}

function delete_product($id){
    include 'connection1.php';

    $sql = "DELETE FROM prodotto WHERE id=?";
    $pdo->prepare($sql)->execute([$id]);
}
