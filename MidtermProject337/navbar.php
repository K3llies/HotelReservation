<?php echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKAB RESORT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js "></script>
    <style>
        #header{
            text-shadow:-4px 3px 4px darkgray;
        }
        footer{
            background:gray;
            color: white;
            text-align: center;
            font-size: smaller;
            height: 40px;
        }
        #navbarCollapse{
            text-align: center;
        }
              
    </style>
</head>
<body>
    <h1 id="header" class="text-center">MKAB Resort</h1>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:green;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="resort.png" height="40" width="40" alt="A blank-and-white drawing of a hotel with the word hotel written on top">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="yurts.php" class="nav-item nav-link">Yurts</a>
                    <a href="activities.php" class="nav-item nav-link">Activities</a>
                    <a href="reservation.php" class="nav-item nav-link">Reservation</a>
                    <a href="comments.php" class="nav-item nav-link">Comments</a>
                </div>
            </div>
        </div>
    </nav>
    <footer class="fixed-bottom">
        <p>Copyright &copy;';?> <?php echo date("Y");?> <?php echo 'MKAB Resort<br>email:MKABresort@mail.com      
        </p>           
    </footer>
    </div>
</body>
</html>';?>