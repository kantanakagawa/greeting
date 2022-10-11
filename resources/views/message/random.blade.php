<?php
$ary = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
$key = array_rand($ary, 1);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>ランダムなメッセージ</h1>
    <h2><?= $ary[$key] ?></h2>
</body>
</html>
