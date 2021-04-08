<?php

session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form >*{
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1>Welcome, Please add your Quote</h1>

<form action="process.php" method="post">
    <label>
        Your Name: <input type="text" name="name">
    </label>
    <label>
        Your Quote: <textarea name="quote" id="" cols="30" rows="10"></textarea>
    </label>
    <input type="submit" value="Add my quote!">
</form>
<form action="main.php" method="post">
    <input type="hidden" name="toSkip" value="skip">
    <input type="submit" value="Skip to quote!">
</form>


</body>
</html>