<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "user_info";
    
    $genre = $_POST["genre"];
    $usernamedb = $_POST["user"];
    $books = 1;
    $days = 30;
																			// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
																			// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO userchallenge(username, days, books, genre)
	VALUES ('$usernamedb', '$days', '$books', '$genre')";
	if (mysqli_query($conn, $sql)) {
	    echo "You have successfully signed up for the 30-Day Challenge" ;
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>