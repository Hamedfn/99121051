<?php
//include 'book.php';
include 'functions.php';
/*
$book = new book();
$book -> Title ='the first title';
$book -> Author = 'Author 1';
dd($book);
*/


$dsn ='mysql:host=localhost;port=3306;dbname=web2;charset=utf8mb4'; 
$pdo = new PDO ($dsn,'root');
$statement = $pdo -> prepare ('SELECT * FROM book') ;
$statement->execute();
$book = $statement->fetchALL(); 
dd($book);



//irad in part az code chie tu chrom EROR mideeeeeeeeee

?>