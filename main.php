<?php

session_start();
require_once "new-connection.php";
$result = $db->query("SELECT * FROM users_quote ORDER BY date DESC");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
echo "<h1>Here are some Quotes!</h1>";
while($row = $result->fetch_object()){
    $phpdate = strtotime( $row->date );
    $mysqldate = date( 'Y-M-D h:i:s A', $phpdate );
    echo "<div style='border: 1px solid black; padding:10px;'> <p>'{$row->quote}'</p> <p>{$row->name} at : $mysqldate</p></div>";
}
?>

</body>
</html>
