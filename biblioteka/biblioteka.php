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
            require_once('../assets/connect.php');
            echo("<h1>Książki i ich autorzy:</h1>");
            $sql = 'SELECT * FROM bibliotekaTytuł';
            echo("<h2>Tytuły:</h2>");
            echo("<li>".$sql);
        echo("</table>");
        $result = $conn->query($sql);
        echo("<select name='title' id='title'>");
  while($row=$result->fetch_assoc()){ 
  echo("<option value=".$row['id'].">".$row['tytul']."</option>");
          }
      echo("</select>");
            ?>
            </div>
    </header>
</body>
</html>

            
