 <?php
 print_r($_POST);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Pogoda";

try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname;",$username,$password);
		$sql = "INSERT INTO data (Index,City,Datetimes,DateSearch,Weather,Temp,Pressure)
				VALUES(City,Date1,Date2,Weather,Temp,Press)";
		$conn->exec($sql);
			echo "Data Add";
		}
	catch(PDOexception $e)
	{
		echo $sql . $e->getMessage();
	}

	$conn=null;
	?>