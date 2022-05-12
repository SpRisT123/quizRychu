<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST" action="wynik.php">
    <center>
<div id="duze2"><br><img src="quiz.png" alt="Quiz" width="250" height="200"></div></center>
<br>
<div id="duze">
<?php

$connect = mysqli_connect('localhost','root','','quiz');
$zapytanie = mysqli_query($connect,"SELECT * FROM quiz;");
$odpowiedz = mysqli_fetch_all($zapytanie,MYSQLI_ASSOC);
$liczby = array();

for ($i=0;$i<8;$i++){
    $liczby[] = $i+1;
}
for ($i=0;$i<7;$i++){
    $pozycja = rand($i,7);
    $temp = $liczby[$i];
    $liczby[$i] = $liczby[$pozycja];
    $liczby[$pozycja] = $temp;
}
$i=0;
for($t=0;$t<8;$t++){
    $query = mysqli_query($connect, "SELECT * FROM quiz WHERE id = $liczby[$i]");
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    foreach($result AS $o){
        echo "<div class=pytania>";
        echo "</br>";
        echo "<center>";

        echo $o['pytanie']."<br>";
        echo "</center>";
       echo "<div id='buton2'>";
        echo "<div class='buton'>";
        if($o['poprawna']=='a'){
            echo "<input type='radio' name='pytanie$i' value='true'>".$o['a']."<br>";
            
        }
        else{
            echo "<input type='radio' name='pytanie$i' value='false'>".$o['a']."<br>";
        }
        if($o['poprawna']=='b'){
            echo "<input type='radio' name='pytanie$i' value='true'>".$o['b']."<br>";
        }
        else{
            echo "<input type='radio' name='pytanie$i' value='false'>".$o['b']."<br>";
        }
        if($o['poprawna']=='c'){
            echo "<input type='radio' name='pytanie$i' value='true'>".$o['c']."<br>";
        }
        else{
            echo "<input type='radio' name='pytanie$i' value='false'>".$o['c']."<br>";
        }
        if($o['poprawna']=='d'){
            echo "<input type='radio' name='pytanie$i' value='true'>".$o['d']."<br>";
        }
        else{
            echo "<input type='radio' name='pytanie$i' value='false'>".$o['d']."<br>";
        }
        echo "</div>";
    echo "</div>";
    }
    
    $i++;
}
?></div>
 </br>
<center>
 <button id="przycisk">Sprawdź</button></center>
   </br>
</div>
</form>
</body>
</html>