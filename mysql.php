<?php

$servername = "localhost";
$username = "username";
$password = "password";
$databasename = "web";


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


    $sql ='CREATE TABLE BOOKperties (title VARCHAR(120) NOT NULL ,Author VARCHAR(32)NOT NULL , publish_date DATE DEFAULT NULL);' ;
    
    if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
 
 
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