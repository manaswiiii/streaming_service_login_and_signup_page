<?php

require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/Entity.php");


if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Reeceflix </title>
    <link rel="stylesheet" type="text/css" href="/assets/style/style.css">

    <script src="https://kit.fontawesome.com/06a651c8da.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="wrapper"> 