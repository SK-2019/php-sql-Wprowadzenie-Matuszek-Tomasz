<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Matuszek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/SK-2019/php-sql-Wprowadzenie-Matuszek-Tomasz">GITHUB</a>
        <div class="nav>
            <a class="active" href="index.php">Strona główna</a></li>
            <a class="nav1" href="pracownicy.php">Pracownicy</a></li>
            <a class="nav2" href="pracownicyiorganizacja.php">Pracownicy i organizacja</a></li>
            <a class="nav3" href="funkcjeagregujace.php">Funkcje Agregujące</a></li>
        </div>
            
   
            <h2 class="h2za">Select count(imie) as ci, dzial, nazwa_dzial  From pracownicy, organizacja where dzial=id_org group by dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select count(imie) as ci, dzial, nazwa_dzial  From pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<table border=1>");
                    echo("<th>Count(Imie)</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_Dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
            <h2 class="h2zb">Zad 2 Select * From pracownicy where imie like '%a' and dzial between 2 and 4</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and imie like '%a' and dzial between 2 and 4");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class=h2zc>Zad 3 Select avg(zarobki), dzial From pracownicy group by dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select avg(zarobki), dzial, nazwa_dzial From pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<table border=1>");
                    echo("<th>Avg zarobki</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["avg(zarobki)"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2>Zad 4 Select * From pracownicy where imie not like '%a' and zarobki between 15 and 50</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and imie not like '%a' and zarobki between 15 and 50");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2>Zad 5 Select * From pracownicy where zarobki>15 and (dzial=1 or dzial=4)</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and zarobki>15 and (dzial=1 or dzial=4)");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </body>
</html>
