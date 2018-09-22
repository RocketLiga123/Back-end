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
    
    	</br>
	</br></br>
	</br>
	
        <h1 align="center">Додавання  данних</h1>
</br></br>


	<form name="Add" action="FileAdd.php" method="post">

		</br>		</br>
<label>Місто </label><input type="text" name="City"></input>
		</br>		</br>
<label>Дата та час запиту</label> <input type="Datetime-local" name="Date1"></input>
		</br>		</br>
<label>Шукана дата</label> <input type="Date" name="Date2"></input>
		</br>		</br>
<label>Погода</label> <input type="text" name="Weather"></input>
		</br>		</br>
<label>Температура</label> <input type="number" name="Temp"></input>

		</br>		</br>
<label>Тиск</label>
<input type="number" name="Press"></input>
		</br>		</br>
			<input type="submit" name="done" Value="Додати" align="center"></input>
	</form>


		</br>
	</br>


	</br>
	</br></br>
	</br>
	

    </li>
</body>
</html>
