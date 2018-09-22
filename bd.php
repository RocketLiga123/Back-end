		<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Pogoda";


	try {
		
	$conn = new PDO ("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->beginTransaction();
	$conn->exec("INSERT INTO data (Index, Місто,Дата та час запиту, Шукана дата, Погода, Температура, Тиск)	VALUES ('1','Kiev','Clear','21.08.12','22.08.12 12:21:00','21','778')");
	$conn->commit();
	echo "Record Created!";
	}
	catch (PDOException $e)
	{
		$conn->rollBack();
	}
  ?>