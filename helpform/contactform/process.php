<?php include 'database.php';

// create a variable
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];

//Execute the query

mysqli_query($connect,"INSERT INTO contactform(firstname,lastname,email,phonenumber)  VALUES('$firstname','$lastname','$email','$phonenumber')");

if (mysqli_affected_rows($connect) > 0) {
	echo "<p>Details Added</p>";
	echo "<a href='index.php'>Go Back</a>";
} else {
	echo "Error: Details NOT Added <br/>";
	echo mysqli_error ($connect);
}