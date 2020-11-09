<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="nav">
         <a class="navlink" href="index.php">Strona główna</a>
	</div>
            <h2>Pracownicy</h2>
   <?php
	require_once('connect.php');
echo("<li>"SELECT * FROM pracownicy"</li>");
    $result=$conn->query("SELECT * from pracownicy");
	echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
		echo("</tr>");
	    }
	?>
	echo("</table>");
	
	<?php
echo("<li> SELECT * FROM pracownicy WHERE dzial=2</li>");
    $result=$conn->query("SELECT * from pracownicy WHERE dzial=2");
	echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
		echo("</tr>");
		}
	?>

	<?php
echo("<li> SELECT * FROM pracownicy WHERE dzial=2 AND dzial=3</li>");
    $result=$conn->query("SELECT * from pracownicy WHERE dzial=2 AND dzial=3");
	echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
		echo("</tr>");
		}
	?>
	echo("</table>")

	<?php
echo("<li> SELECT * FROM pracownicy WHERE zarobki<30</li>");
    $result=$conn->query("SELECT * from pracownicy WHERE zarobki<30");
	echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
		echo("</tr>");
		}
	?>
</body>
