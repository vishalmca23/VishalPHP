<html>
<head>
</head>
<body bgcolor="black">
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Hotel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$mydata = mysqli_query( $conn, "SELECT * FROM booking");
$flag = 0;
while($record = mysqli_fetch_assoc($mydata)){
	$flag = $flag + count($record['S.No.']);
}
$flag++;
$sql = "INSERT INTO `booking` (`S.No.`, `First_Name`, `Last_Name`, `Email`, `Date`, `City`) VALUES ($flag,'$_POST[Firstname]','$_POST[Lastname]','$_POST[Email]','$_POST[Date]','$_POST[City]')";
mysqli_query($conn, $sql);

echo '<center>
		<div style="background-color:black; color:white; padding:30px;"><a href="index.html"><img src="Buttons/logo.jpg" style="width:600px; height:281px; float:center;"></a></div>
		<p style="font-family:magneto; font-size:140; color:white;">Congratulations</p>
		<p style="font-family:magneto; font-size:80; color:white;">' . $_POST['Firstname'] . $_POST['Lastname'] . '</p>
		<p style="font-family:magneto; font-size:50; color:yellow;">Your Request Have Been Registered, Our Customer Care officer will Contact You As Soon As Possible.</p>
	</center>';
mysqli_close($conn);
?>
</body>
</html>