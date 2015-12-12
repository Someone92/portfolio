<?php 
    require "include/db/local-connect.php";
    $page = strtolower(basename($_SERVER["PHP_SELF"]));
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        
        <!--favicon -->
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
           
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="author" content="Jens Andersson">
		<meta name="description" content="Jens Andersson är en utvecklare som har kunskap i diverse programmerings språk">
		<meta name="keywords" content="jens, andersson, sverige, html, css, sass, php, java, javascript, jquery, python">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <?php include("include/navigation.php"); ?>
        <?php
            if($page !== "portfolio.php") {
                echo '<header id="background">';
                    echo '<div class="welcome-text">';
                        echo '<h1>Jens Andersson</h1>';
                        echo '<h2>Front-End Utvecklare</h2>';
                    echo '</div>';
                echo '</header>';
            }
        ?>