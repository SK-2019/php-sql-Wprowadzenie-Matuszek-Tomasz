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
            <a class="nav1 active" href="../wiele/szkola1.php">Szkoła</a>
            <a class="nav1" href="../wiele/przychodnia1.php">Przychodnia</a>
            <a class="nav1" href="../wiele/sklep1.php">Sklep</a>
                </nav>
              </div>
              <div class="pracow">
<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from klasa");
                echo("<h2>SELECT * from klasa</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>klasa</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_klasa"]."</td><td>".$row["klasa"]."</td>");
                            echo("<td><form action='del13biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["id_klasa"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from nauczyciel");
                echo("<h2>SELECT * from nauczyciel</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>nauczyciel</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_nauczyciel"]."</td><td>".$row["nauczyciel"]."</td>");
                            echo("<td><form action='del14biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["id_nauczyciel"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT *,klasa_nauczyciel.id as klana from klasa,nauczyciel,klasa_nauczyciel WHERE id_klasa=klasa_id AND id_nauczyciel=nauczyciel_id");
                echo("<h2>SELECT * from klasa,nauczyciel,klasa_nauczyciel WHERE id_klasa=klasa_id AND id_nauczyciel=nauczyciel_id</h2>");
                echo("<table border=1>");
                echo("<th>klasa</th>");
                echo("<th>nauczyciel</th>");
                echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["klasa"]."</td><td>".$row["nauczyciel"]."</td>");
                            echo("<td><form action='del15biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["klana"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
                </div>
               <footer>PHP-SQL-Wprowadzenie-Matuszek Tomasz</footer>
           </div>
      </body>
</html>