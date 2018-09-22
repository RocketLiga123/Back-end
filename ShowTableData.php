<!DOCTYPE html>
<html lang="en">

<html>

<head>
	<meta charset="UTF-8">
	<title>DATABASE</title>
	<link rel="stylesheet" href="style.css">
	
</head>
    <header>
      <div class="logo">
        <a href="index.php"><img class="graficlogo" src="img\logo.PNG"></img></a>
      </div>
    </header>
<body background="img\background.jpg">
<ul align="center" class="menu">
    <li><a href="#">Таблиці</a>
        <ul class="submenu">
            <li><a href="Page.php">Данні міста та погоди</a></li>
        </ul>
    </li>
    <li><a href=#>Запити</a>
        <ul class="submenu">
            <li><a href="ShowTableData.php">Show data table</a></li>
            <li><a href=#>2</a></li>
            <li><a href=#>1</a></li>
        </ul>
    </li>
    	</br>
	</br></br>
	</br>
<table  border="3px" width="100%">
   <tr>
   	<td align="center">
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

			echo "<br>";
		}
	}
	$conn->close();
?>
</td>
</tr>
</table>
</body>
</html>


