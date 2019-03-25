 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Creditt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO transactions (id, name, Credit Amount, Debit Amount)
VALUES ('1', 'Yash', '1000000000000','100000')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 