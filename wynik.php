<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="quiz.php">
    <div id="duze1"><br>
<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$connect = mysqli_connect('localhost','root','','quiz');

 $punkty =0;
 for($i = 0;$i <=7;$i++){
    $text = 'pytanie'.$i;
    if($_POST[$text]==='true'){
        $punkty +=1;
     }
 }
 echo '<b>Zdobyłeś'.' '.$punkty.'/8 punktów</b><br><b>Gratulacje!!!';
?>
<br><br>
<button id="przycisk1"><b><b>Rozwiąż ponownie</b></b></button>
</div>
</form>
</body>
</html>