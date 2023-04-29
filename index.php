<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//exit ("connected successfully");
  
// in codie az tu terminal avordam k table ro misaze ba $mysql
$sql =' create table books(Title varchar(128)not null, Aothor varchar (32),publish_date Date default null ;' ;

if ($conn->query($sql) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
  exit();


 
$books = [
  [
      'title' => 'web',
      'Author' => 'Author1',
      'publish_date' => '1400',
      'price' => 560000
  ],
  [
      'title' => 'math ',
      'Author' => 'Author1',
      'publish_date' => '1399',
      'price' => 456789
  ],
  [
      'title' => 'sien',
      'Author' => 'The second Author',
      'publish_date' => '1399',
      'price' => 1230
  ],
  [
      'title' => 'arabi',
      'Author' => 'The third Author',
      'publish_date' => '1401',
      'price' => 2000
  ]
];

$filteredbook = array_filter($books,function($book){
  return $book['price'] <= 150000;
});
require('index.view.php');





?>