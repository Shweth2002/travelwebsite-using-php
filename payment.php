<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO payment(fullname, email, addresss, city, pin, cardno, cvv)
VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[addresss]', '$_POST[city]', '$_POST[pin]', '$_POST[cardno]', '$_POST[cvv]' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<form action="thank.html" method="post">
<h1>Payment SUCCESSFULL</h1>
<input type="submit" name="submit"/>
</form>
</body>
</html>