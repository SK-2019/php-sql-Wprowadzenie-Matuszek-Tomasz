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

        $sql1 = ("SELECT * FROM bibliotekaAutor"); 
        $sql2 = ("SELECT * FROM bibliotekaTytul"); 
        $result=$conn->query($sql1);
        echo("<form action='wyporzyczanie.php' method='POST'>");
        echo("<label for='Autor'><p>WYBIERZ AUTORA:</p></label>");
        echo("<select name='Autor' id='id_autor'>");
        while($row=$result->fetch_assoc()) 
        {
            echo("<option value=".$row['id_autor'].">".$row['Autor']."</option>");
        }
        echo("</select>");
        $result=$conn->query($sql2);
        echo("<label for='Tytuł'><p>WYBIERZ TYTUŁ:</p></label>");
        echo("<select name='Tytuł' id='id_tytuł'>");
        while($row=$result->fetch_assoc())
        {
            echo("<option value=".$row['id_tytuł'].">".$row['Tytuł']."</option>");
        }
        echo("</select>");
        echo("<input type='submit' value='Wypożycz'>'");
        echo("</form>");
          ?>
            </div>
        </div>
    </header>
</body>
</html>

            
