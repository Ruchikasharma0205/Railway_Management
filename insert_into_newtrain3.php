
<!-- to be changed later -->
<html>
<body style=" background-image: url(adminlogin.jpeg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

<?php
session_start();

require "db.php";

// if(isset($_POST["ns"]))
//{
//$ns=$_POST["ns"];
// $tnumber=$_POST["tnumber"];
// $_SESSION["tnumber"] = "$tnumber";
// $sp=$_POST["sp"];
// $_SESSION["sp"] = "$sp";
// $dp=$_POST["dp"];
// $_SESSION["dp"] = "$dp";
// $dtrav=$_POST["dtrav"];
// $_SESSION["dtrav"] = "$dtrav";
// $ac=$_POST["ac"];
// $_SESSION["ac"] = "$ac";
// $ds=$_POST["sl"];
// $_SESSION["sl"] = "$sl";

// echo "<table><thead><td>Train_number</td><td>Starting_point</td><td>Destination_point</td><td>Date_of_travel</td><td>No_of_ac</td><td>No_of_sl</td></thead>";
// echo "<tr><td>".$tnumber."</td><td>".$sp."</td><td>".$dp."</td><td>".$dtrav."</td><td>".$ac."</td><td>".$sl."</td></tr></table>";

// echo " <table><thead><td>Station</td><td>Arrival_Time</td><td>Departure_Time</td><td>Distance</td></thead>";
// echo " <tr><td>".$sp."</td><td>".$st."</td><td>".$st."</td><td>0</td></tr>";

echo "<form action=\"insert_into_newtrain4.php\" method=\"post\">";
// $temp=1;
// while ($temp<=$ns) 
// {
//  	echo " <tr><td><select id=\"stn".$temp."\" name=\"stn".$temp."\"required> ";

// 	$cdquery="SELECT sname FROM station";
// 	$cdresult=mysqli_query($conn,$cdquery);
	        
// 	echo " <option value = \"\" > </option>";
			
// 	while ($cdrow=mysqli_fetch_array($cdresult)) 
// 	{
// 	 $cdTitle=$cdrow['sname'];
// 	 echo " <option value = \"$cdTitle\" > $cdTitle </option>";
// 	}

// 	echo "
// 	</select></td>
// 	<td><input type=\"text\" name=\"st".$temp."\" required></td>
// 	<td><input type=\"text\" name=\"dt".$temp."\" required></td>
// 	<td><input type=\"text\" name=\"ds".$temp."\" required></td>	
// 	</tr>";
//  $temp+=1;
// }

// 	echo " <tr><td>".$dp."</td><td>".$dt."</td><td>".$dt."</td><td>".$ds."</td></tr></table>";	
// 	echo "<input type=\"submit\">";
// }

//else// if($ns==0)
//{
echo "
<form action=\"insert_into_newtrain3.php\" method=\"post\">
<table>
<tr><td>Train Number </td><td> <input type=\"text\" name=\"tnumber\" required></td></tr>

<tr><td>Starting Point </td><td> <select id=\"sp\" name=\"sp\" required>
";

$cdquery="SELECT sname FROM station";
$cdresult=mysqli_query($conn,$cdquery);

while ($cdrow=mysqli_fetch_array($cdresult)) 
{
 $cdTitle=$cdrow['sname'];
 echo " <option value = \"$cdTitle\" > $cdTitle </option>";
            
}

echo "

</select></td></tr>


<tr><td>Destination Point </td><td> <select id=\"dp\" name=\"dp\" required>

";

$cdquery="SELECT sname FROM station";
$cdresult=mysqli_query($conn,$cdquery);

while ($cdrow=mysqli_fetch_array($cdresult)) 
{
 $cdTitle=$cdrow['sname'];
 echo " <option value = \"$cdTitle\" > $cdTitle </option>";
            
}

echo "
</select></td></tr>


<tr><td>Date of travel</td><td> <input type=\"text\" name=\"dtrav\" required></td></tr>
</table>
<tr><td>No of ac </td><td> <input type=\"text\" name=\"ac\" required></td></tr>
<tr><td>No of sleeper </td><td> <input type=\"text\" name=\"sl\" required></td></tr>
<input type=\"submit\" value=\"Enter Train Details\">
";//}

echo "<br> <a href=\"http://localhost/railway/admin_login.php\">Go Back to Admin Menu!!!</a> ";

?>

</body>
</html>


  <!-- <tr><td>Distance </td><td> <input type=\"text\" name=\"ds\" required></td></tr> -->
  <!-- <tr><td>No Of Intermediate stations</td><td><input type=\"text\" name=\"ns\" required></td></tr> -->