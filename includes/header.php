<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pig Out! @ The Baddest Kitchen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5ba4a62dd6.js" crossorigin="anonymous"></script>
    </head>
 
    <body id="page-<?php echo $page;?>">
        <header>
            <div class="page-header-top container text-center text-md-left">
                <a href="index.php?p=home"><img src="./images/logo.jpg" alt="StudentEat"></a>
            </div>
            <nav class="navbar navbar-expand-lg mb-4">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>                        
                    </button>

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?p=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?p=categories">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?p=login">Login / Register</a>
                            </li>
                        </ul>
                        <form action="index.php?p=search" method="get" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                        </form>              
                    </div>
                </div>
            </nav>
        </header>