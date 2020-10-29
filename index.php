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
 
    <body id="page-home">
        <header>
            <div class="page-header-top container text-center text-md-left">
                <a href="index.html"><img src="./images/logo.jpg" alt="StudentEat"></a>
            </div>
            <nav class="navbar navbar-expand-lg mb-4">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>                        
                    </button>

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categories.html">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login-reg.html">Login / Register</a>
                            </li>
                        </ul>
                        <form action="search.html" method="get" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                        </form>              
                    </div>
                </div>
            </nav>
        </header>


        <div class="container">
            <h1 class="mb-4 pb-2">Welcome to StudentEat</h1>
            <div class="row">
                <div class="col-lg-9">
                    <p>
                        The home of the baddest kitchen
                    </p>
                    <p>
                        So just pig out!
                    </p>
                    <a href="categories.html" class="btn btn-studenteat">Browse recipes</a>
                </div>
                <div class="col-lg-3">
                    <img src="./images/plate.png" alt="Plate of food"/>
                </div>
            </div>
        </div>

        <footer class="container mt-4 text-center">
            <p>
              &copy;StudentEat - Created for educational purposes   
            </p>                       
        </footer>

    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>