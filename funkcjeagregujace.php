<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Matuszek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
                <div class="git">
            <h3><a href="https://github.com/SK-2019/PHP-SQL-Wprowadzenie-Matuszek-Tomasz">GITHUB</h3>
                </div>
          <div class="tomek">
           <div class="navigator">
                 <nav>
            <a class="nav1" href="index.php">Strona główna</a>
            <a class="nav1" href="pracownicy.php">Pracownicy</a>
            <a class="nav1" href="pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
            <a class="nav1 active" href="funkcjeagregujace.php">Funkcje Agregujące</a>
                    <div class="orga1">
            <a class="nav3" href="funkcjeagregujace.php">Funkcje</a>
            <a class="nav3" href="funkcjeagregujace.php">Group By</a>
            <a class="nav3" href="funkcjeagregujace.php">Having By</a>
            <a class="nav3" href="funkcjeagregujace.php">Data i Czas</a>
                    </div>
                </nav>
                <div class="pracow">
                    <h2 class="h2gl">Funkcje</h2>
                <h2 class="h2za">SELECT sum(zarobki) as es FROM pracownicy</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select sum(zarobki) as es from pracownicy");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>           
               </div>
             <footer>PHP-SQL-Wprowadzenie-Matuszek Tomasz</footer>
           </div>
      </body>
</html>
