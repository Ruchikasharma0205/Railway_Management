<html>
<body style=" background-image: url(image.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;" >


<form action="my_new_png.php" method="post">

<?php 

session_start();

require "db.php";

if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 

$card=$_POST["cno"];
$nm=$_POST["name"];

$query = mysqli_query($conn,"SELECT * FROM Booking_Agent WHERE Booking_Agent.cardnumber=$card AND Booking_Agent.name='".$nm."' ") or die(mysql_error());
if(mysqli_num_rows($query) == 0)
{
 echo "No such login !!! <br> ";
 echo " <br><a href=\"http://localhost/railway/new_enquiry_result.php\">Go Back!!!</a> <br>";
 die();
}

$row = mysqli_fetch_array($query);
//echo implode(', ', $row);
$temp=$row['cardnumber'];
//$temp=$row['id'];
// //echo $temp;
// //echo $_SESSION["doj"];

$_SESSION["id"] = "$temp";
$tno=$_POST["tno"];
$_SESSION["tno"] = "$tno";
$class=$_POST["class"];
$_SESSION["class"] = "$class";
$nos=$_POST["nos"];
$_SESSION["nos"] = "$nos";


echo "<table>";

for($i=0;$i<$nos;$i++) 
{
echo "<tr><td><input type='text' name='pname[]' placeholder=\"Passenger Name\" required></td><br> ";
echo "<td><input type='text' name='page[]' placeholder=\"Passenger Age\" required></td><br>";
echo "<td><input type='text' name='pgender[]' placeholder=\"Passenger Gender\" required></td></tr><br> ";
}

echo "</table>";

//Enter Train No: <input type="text" name="tno" required><br>
//Enter Class: <input type="text" name="class" required><br>

echo "<a href=\"http://localhost/railway/new_enquiry.php\">Back to Enquiry</a>";

$conn->close(); 

?>

<br><br><input type="submit" value="Book">
</body>
</html>
