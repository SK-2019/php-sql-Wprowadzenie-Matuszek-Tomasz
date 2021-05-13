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
            <a class="nav1 active" href="../wiele/serwis1.php">Serwis Samochodowy</a>
            <a class="nav1" href="../wiele/szkola1.php">Szkoła</a>
            <a class="nav1" href="../wiele/przychodnia1.php">Przychodnia</a>
            <a class="nav1" href="../wiele/sklep1.php">Sklep</a>
                </nav>
              </div>

              <div class="pracow">
<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from rejestracja");
                echo("<h2>SELECT * from rejestracja</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>rejestracja</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_rejestracja"]."</td><td>".$row["rejestracja"]."</td>");
                            echo("<td><form action='del7biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["id_rejestracja"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from mechanik");
                echo("<h2>SELECT * from mechanik</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>mechanik</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_mechanik"]."</td><td>".$row["mechanik"]."</td>");
                            echo("<td><form action='del8biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["id_mechanik"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT *, rejestracja_mechanik.id as rema from rejestracja, mechanik, rejestracja_mechanik WHERE id_mechanik=mechanik_id AND id_rejestracja=rejestracja_id");
                echo("<h2>SELECT * from rejestracja,mechanik,rejestracja_mechanik WHERE id_rejestracja=rejestracja_id AND id_mechanik=mechanik_id</h2>");
                echo("<table border=1>");
                echo("<th>rejestracja</th>");
                echo("<th>mechanik</th>");
                echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["rejestracja"]."</td><td>".$row["mechanik"]."</td>");
                            echo("<td><form action='del9biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["rema"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");
                            echo("</tr>");}
                echo("</table>");
        ?>

                </div>
               <footer>PHP-SQL-Wprowadzenie-Matuszek Tomasz</footer>
           </div>
      </body>
</html>