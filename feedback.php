<html>
<head>
</head>
<body bgcolor="black">
<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$mydata = mysqli_query( $conn, "SELECT * FROM feedback");
$flag = 0;
while($record = mysqli_fetch_assoc($mydata)){
	$flag = $flag + count($record['S.No.']);
}
$flag++;
$sql = "INSERT INTO `feedback` (`S.No.`, `First_Name`, `Last_Name`, `Email`, `Feedback`) VALUES ($flag,'$_GET[Firstname]','$_GET[Lastname]','$_GET[Email]','$_GET[Feedback]')";
mysqli_query($conn, $sql);

echo '<center>
    <div style="background-color:black; color:white; padding:30px;"> 
		<a href="index.html">
			<img src="Buttons/logo.jpg"
			style="width:600px; height:281px; float:center;">
		</a>
	</div>
	
	<p style="font-family:magneto; font-size:80; color:white;">
	Thank You for your contribution.
     </p>
	 <p style="font-family:magneto; font-size:80; color:white;">
	 ' . $_GET['Firstname'] ." ". $_GET['Lastname'] . '
     </p>
</center>';
mysqli_close($conn);
?>
</body>
</html>