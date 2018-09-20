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
            <li><a href=#>3</a></li>
            <li><a href=#>2</a></li>
            <li><a href=#>1</a></li>
        </ul>
    </li>
    	</br>
	</br></br>
	</br>
	
        <h1 align="center">Додавання  данних</h1>
</br></br>


	<table align="jystify"class="table_blur table"  border="3" width="25%">
	<form action="" method="post">
		<tr>
			<td><p align="center">Місто</p></td>
			<td><p align="center"><input type="text" name="City"></p></td>
		</tr>
		<tr>
			<td><p align="center">Дата та час запиту</p></td>
			<td><p align="justify"><input type="datetime-local" id="Zapros"></td>
		</tr>
		<tr>
			<td><p align="center">Дата заявки</p></td>
			<td><p align="center"><input type="date" id="Data"></td>
		</tr>
		<tr>
			<td><p align="center">Погода</p></td>
			<td><p align="center"><input type="text" id="Pogo"></td>
		</tr>
		<tr>
			<td><p align="center">Температура</p></td>
			<td><p align="center"><input type="number" id="Tempe"></td>
		</tr>	
		<tr>
			<td><p align="center">Тиск</p></td>  
				<td><p align="center"><input type="number" id="Davlenie"></td>     
		</tr>
		</form>
	</table>
		</br>
	</br>

	<p align="center"><a href="#" class="knopka" onclick=""> ДОДАТИ</a></p>

	</br>
	</br></br>
	</br>
	
	<h1 align="center">Данні бази данних</h1>
	</br>
	</br>
	<table class="table_blur" border="3" width="100%">
		<tr>
			<td><p align="center">Місто</p></td>
			<td><p align="center">Дата та час запиту</p></td>
			<td><p align="center">Дата заявки</p></td>
			<td><p align="center">Погода</p></td>
			<td><p align="center">Температура</p></td>
			<td><p align="center">Тиск</p></td>       
		</tr>
		<tr>
			<td><p align="center"></p></td>
			<td><p align="center"></td>
			<td><p align="center"></td>
			<td><p align="center"></td>
			<td><p align="center"></td>
			<td><p align="center"></td>
		</tr>
	</table>
    </li>
</body>
</html>
