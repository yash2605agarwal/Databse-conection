 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Credit";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Transactions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
Credit INT(10) NOT NULL,
Debit INT(10) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Mytable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 