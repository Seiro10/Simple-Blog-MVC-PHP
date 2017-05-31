<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<? ASSETS ?>css/style.css"

</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">



                <?php if (!empty($_SESSION['user'])){ ?>
                    <li class="active"><a href='index.php'>Home</a></li>
                    <li class="active"><a href='admin.php'>Admin</a></li>
                    <li class="active"><a href='index.php?p=logout'>Se Déconnecter</a></li>
                    <li class="active"><a href='admin.php?p=create'>Ajouter un Article</a></li>

                <?php }else{ ?>

                    <li class="active"><a href='index.php'>Home</a></li>
                    <li class="active"><a href='index.php?p=login'>Se connecter</a></li>


               <?php } ?>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
