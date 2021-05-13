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
            <a class="nav1" href="../wiele/przychodnia1.php">Przychodnia</a>
            <a class="nav1 active" href="../wiele/sklep1.php">Sklep</a>
                </nav>
              </div>

              <div class="pracow">
<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from producent");
                echo("<h2>SELECT * from producent</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>producent</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_producent"]."</td><td>".$row["producent"]."</td>");
                            echo("<td><form action='del10biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["id_producent"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * from produkt");
                echo("<h2>SELECT * from produkt</h2>");
                echo("<table border=1>");
                    echo("<th>nr.</th>");
                    echo("<th>produkt(model)</th>");
                    echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_produkt"]."</td><td>".$row["produkt"]."</td>");
                            echo("<td><form action='del11biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["id_produkt"]."'>");
                            echo("<input type='submit' value='DELETE'>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>

<?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT *,producent_produkt.id as pro from producent,produkt,producent_produkt WHERE id_producent=producent_id AND id_produkt=produkt_id");
                echo("<h2>SELECT * from producent,produkt,producent_produkt WHERE id_producent=producent_id AND id_produkt=produkt_id</h2>");
                echo("<table border=1>");
                echo("<th>producent</th>");
                echo("<th>produkt</th>");
                echo("<th>delete</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["producent"]."</td><td>".$row["produkt"]."</td>");
                            echo("<td><form action='del12biblioteka.php' method=POST><input type='hidden' name='id' value='".$row["pro"]."'>");
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