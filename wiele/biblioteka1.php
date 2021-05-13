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
            <a class="nav1 active" href="../wiele/biblioteka1.php">Biblioteka</a>
            <a class="nav1" href="../wiele/serwis1.php">Serwis Samochodowy</a>
            <a class="nav1" href="../wiele/szkola1.php">Szkoła</a>
            <a class="nav1" href="../wiele/przychodnia1.php">Przychodnia</a>
            <a class="nav1" href="../wiele/sklep1.php">Sklep</a>
                </nav>
              </div>
              <div class="pracow">
<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from autor");
                echo("<h2>SELECT * from autor</h2>");
                echo("<table border=1>");
                    echo("<th>id</th>");
                    echo("<th>imie</th>");
                    echo("<th>nazwisko</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id"]."</td><td>".$row["imie"]."</td><td>".$row["nazwisko"]."</td>");
                            echo("<td><form action='del1biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["id"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from tytul");
                echo("<h2>SELECT * from tytul</h2>");
                echo("<table border=1>");
                    echo("<th>id</th>");
                    echo("<th>tytuł</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                            echo("<td><form action='del2biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["id"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");
                        }
                echo("</table>");
        ?>

<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT *, autor_tytul.id as atid from autor, tytul, autor_tytul where autor.id=autor_id and tytul.id=tytul_id");
                echo("<h2>SELECT *, autor_tytul.id as atid from autor, tytul, autor_tytul where autor.id=autor_id and tytul.id=tytul_id</h2>");
                echo("<table border=1>");
                    echo("<th>id</th>");
                    echo("<th>imie</th>");
                    echo("<th>nazwisko</th>");
                    echo("<th>tytuł</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["atid"]."</td><td>".$row["imie"]."</td><td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
                            echo("<td><form action='del3biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["atid"]."'>");
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