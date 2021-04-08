<?php
session_start();
require_once "new-connection.php";

if(isset($_POST["toSkip"])){
    header("location: main.php");
}
if(isset($_POST["name"])){
    $name = $_POST['name'];
    $quote = FILTER_VAR($_POST['quote'],FILTER_SANITIZE_STRING);
    $_SESSION["name"] = $_POST['name'];
    $request = $db->query("insert into users_quote(name,quote,date) VALUES('$name','$quote',now())");
    header("location: main.php");

}else{
    header("location:index.php");
}
die();