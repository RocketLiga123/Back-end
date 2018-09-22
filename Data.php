<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Pogoda";



		$conn = new mysqli($servername,$username,$password,$dbname);
//	$conn = new PDO ("mysql:host=$servername;dbname=$dbname",$username,$password);
	$sql = "SELECT * FROM data";
	$rezult = $conn->query($sql);
	if ($rezult->num_rows > 0)
	{
		while($row = $rezult -> fetch_assoc())
		{
			echo "<br> index: ".$row["Index"];
			echo "<br> City: ".$row["City"];
			echo "<br> Datetimes: ".$row["Datetimes"];
			echo "<br> DateSearch: ".$row["DateSearch"];
			echo "<br> Weather: ".$row["Weather"];
			echo "<br> Temp ".$row["Temp"];
			echo "<br> Pressure: ".$row["Pressure"];
		}
	}
	$conn->close();
?>