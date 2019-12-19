<!DOCTYPE html>
<html>
<head>
	<? php
	 $book_name='To Kill A Mockingbird';
	 $book_name=trim($book_name);
	 $book_name=stripslashes($book_name);
	?>
	<title><? php $book_name ?></title>
</head>
<body>
	<? php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM books WHERE book_name=$book_name";
$result = $conn->query($sql);

if (($result->num_rows) > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["book_name"]."</h3>". "<br>Author:" . $row["book_author"]. "<br>Category:"
	.$row["book_genre"]."<br>Description: ".$row["book_description"]."<br>Price:".$row["book_price"]."<br>Ratings:".$row["book_rating"].
	"<br>"."<a href='".$row["book_link"]."'>Click Here For sample</a>".".<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>