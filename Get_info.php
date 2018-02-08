<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "learnE";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exeption
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into user (yourname, yourmail, password) values ('john1', 'abcde@gmail', '133')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "new record created successfully";
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>