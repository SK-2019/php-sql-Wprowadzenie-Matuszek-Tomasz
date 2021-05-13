<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Matuszek</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
        <header>
                <div class="git">
            <h3><a href="https://github.com/SK-2019/PHP-SQL-Wprowadzenie-Matuszek-Tomasz">GITHUB</h3>
                </div>
          <div class="tomek">
           <div class="navigator">
                 <nav>
            <a class="nav1" href="../index.php">Strona główna</a>
            <a class="nav1" href="../wiele/biblioteka1.php">Biblioteka</a>
            <a class="nav1" href="../wiele/serwis1.php">Serwis Samochodowy</a>
            <a class="nav1" href="../wiele/szkola1.php">Szkoła</a>
            <a class="nav1 active" href="../wiele/przychodnia1.php">Przychodnia</a>
            <a class="nav1" href="../wiele/sklep1.php">Sklep</a>
                </nav>
              </div>
              <div class="pracow">
<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from pacjenci");
                echo("<h2>SELECT * from pacjenci</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>pacjenci</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pacjenci"]."</td><td>".$row["pacjenci"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from lekarze");
                echo("<h2>SELECT * from lekarze</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>lekarze</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_lekarze"]."</td><td>".$row["lekarze"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from pacjenci,lekarze,pacjenci_lekarze WHERE id_pacjenci=pacjenci_id AND id_lekarze=lekarze_id");
                echo("<h2>SELECT * from pacjenci,lekarze, pacjenci_lekarze WHERE id_pacjenci=pacjenci AND id_lekarze=lekarze_id</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>pacjenci</th>");
                    echo("<th>lekarze</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id"]."</td><td>".$row["pacjenci"]."</td><td>".$row["lekarze"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        // SELECT *, pacjenci.imie as pimie, pacjenci.nazwisko as pnazwisko FROM pacjenci,lekarze,pacjenci_lekarze WHERE id_pacjenci=pacjenci_id AND id_lekarze=lekarze_id
                </div>
               <footer>PHP-SQL-Wprowadzenie-Matuszek Tomasz</footer>
           </div>
      </body>
</html>