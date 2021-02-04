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
            <a class="nav1 active" href="../index.php">Strona główna</a>
            </div>
            <h2 class="h2tm">Tomasz Matuszek</h2>
              <div class="pracow">
                  <?php
            require_once("../assets/connect.php");
            $result=$conn->query('SELECT * FROM bibliotekaAutor');
            echo("<table style='margin:auto; width:70%'>");
                echo("<th>ID</th>");
                echo("<th>Autor</th>");
                echo("<th>Tytuł</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['IDAutor']."</td><td>".$row['Autor']."</td><td>".$row['Tytul']."</td>");
                        echo("</tr>");
                    }
        echo("</table>");
            ?>
            </div>
        </div>
    </header>
</body>

            
