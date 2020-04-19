<?php
include_once "Classes/DanceFloor.php";

$danceFloor = new DanceFloor();

$danceFloor->addDancer('Peter', 'male');
$danceFloor->addDancer('Tom', 'male');
$danceFloor->addDancer('Bill', 'male');
$danceFloor->addDancer('Jame', 'male');
$danceFloor->addDancer("Lily","female");
$danceFloor->addDancer("Anna","female");
$danceFloor->addDancer("Emily","female");
$danceFloor->addDancer("Rose","female");
$danceFloor->addDancer("Hanna","female");
$danceFloor->addDancer("Sam","female");

$danceFloor->divideIntoGroups();

echo $danceFloor->pair();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Gán bạn nhảy ở Square Dance</title>
</head>
<body>

</body>
</html>
