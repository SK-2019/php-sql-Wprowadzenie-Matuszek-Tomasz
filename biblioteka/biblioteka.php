<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Matuszek</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
        <header>
                <div class="git">
            <h3><a href="https://github.com/SK-2019/PHP-SQL-Wprowadzenie-Matuszek-Tomasz">GITHUB</h3>
                </div>
          <div class="tomek">
           <div class="navigator">
                 <nav>
            <a class="nav1 active" href="index.php">Strona główna</a>
            </div>
            <h2 class="h2tm">Tomasz Matuszek</h2>
              <div class="pracow">
                  <?php
            require_once("../assets/connect.php");
            $result=$conn->query('SELECT * FROM bibliotekaAutor');
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>tytul</th>");
            echo("<th>imie</th>");
            echo("<th>nazwisko</th>");   
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['tytul']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            }
        echo("</table>");
            ?>
            
