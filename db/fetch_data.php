// hosting info
<?php
$host = "";
$user = "";
$password = "";
$dbName = "";
$port = 3306;

// Connect to the database
$conn = new mysqli($host, $user, $password, $dbName, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the first table (assume this attrbite)
$table1Query = "SELECT first_name, last_name, email, major FROM table1";
$table1Result = $conn->query($table1Query);

// Fetch data from the second table (assume this attrbite)
$table2Query = "SELECT first_name, last_name, age FROM table2";
$table2Result = $conn->query($table2Query);
?>
