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
            <a class="nav1 active" href="index.php">Strona główna</a>
            </div>
            <h2 class="h2tm">Tomasz Matuszek</h2>
              <div class="pracow">
                  <?php
              $conn= new mysqli("remotemysql.com","uAryroT03t","gOUYLSNMoE","uAryroT03t");
            $result=$conn->query('SELECT * FROM biblAutor');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>AUTOR</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["autor"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
            ?>
