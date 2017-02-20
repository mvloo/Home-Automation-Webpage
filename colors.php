<?php
$color = $_GET['color'];
exec("python lights.py -e set_color -a " . $color);
if (empty($color) == FALSE) {
    header('Location: http://192.168.1.160/colors.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Maxim's Home Automation</title>
    
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    
    <header>
    
    <nav class="navbar navbar-dark bg-primary">
        
        <div class="container">
        
            <a class="navbar-brand float-left">Maxim</a>
        
            <ul class="nav navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link">Colors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="advanced.php">Advanced</a>
                </li>
            </ul>
            
        </div>
    
    </nav>
    
    </header>
    
    <div class="container">
    <div class="row">
    </div>
    </div>
    
    <main>

    <!-- Start your project here-->

    <div class="container scrollable">
    <div class="row">
            <div class="col-xs-12">
                
                <div class="card">
                    <div class="card-block">
                        <!---
                            - violet
                             - royal_blue
                             - baby_blue
                             - aqua
                             - royal_mint
                             - seafoam_green
                             - green
                             - lime_green
                             - yellow
                             - yellow_orange
                             - orange
                             - red
                             - pink
                             - fusia
                             - lilac
                             - lavendar
                        
                        --->
                        
                        <div class="col-md-12">
                            <a class="btn btn-block style-btn-white" onclick="window.location.href ='?color=white';">
                                white
                            </a>
                            </div>
                    </div>
                    <div class="card-block">
                        <div class="col-md-3">

                            <a class="btn btn-block style-btn-violet" onclick="window.location.href ='?color=violet';">
                                violet
                            </a>
                            <a class="btn btn-block style-btn-royal-blue" onclick="window.location.href ='?color=royal_blue';">
                                royal blue
                            </a>
                            <a class="btn btn-block style-btn-baby-blue" onclick="window.location.href ='?color=baby_blue';">
                                baby blue
                            </a>
                            <a class="btn btn-block style-btn-aqua" onclick="window.location.href ='?color=aqua';">
                                aqua
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-block style-btn-royal-mint" onclick="window.location.href ='?color=royal_mint';">
                                royal mint
                            </a>
                            <a class="btn btn-block style-btn-seafoam-green" onclick="window.location.href ='?color=seafoam_green';">
                                seafoam green
                            </a>
                            <a class="btn btn-block style-btn-green" onclick="window.location.href ='?color=green';">
                                green
                            </a>
                            <a class="btn btn-block style-btn-lime-green" onclick="window.location.href ='?color=lime_green';">
                                lime green
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-block style-btn-yellow" onclick="window.location.href ='?color=yellow';">
                                yellow
                            </a>
                            <a class="btn btn-block style-btn-yellow-orange" onclick="window.location.href ='?color=yellow_orange';">
                                yellow orange
                            </a>
                            <a class="btn btn-block style-btn-orange" onclick="window.location.href ='?color=orange';">
                                orange
                            </a>
                            <a class="btn btn-block style-btn-red" onclick="window.location.href ='?color=red';">
                                red
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-block style-btn-pink" onclick="window.location.href ='?color=pink';">
                                pink
                            </a>
                            <a class="btn btn-block style-btn-fuchsia" onclick="window.location.href ='?color=fusia';">
                                fuchsia
                            </a>
                            <a class="btn btn-block style-btn-lilac" onclick="window.location.href ='?color=lilac';">
                                lilac
                            </a>
                            <a class="btn btn-block style-btn-lavender" onclick="window.location.href ='?color=lavendar';">
                                lavender
                            </a>
                        
                        </div>
                    </div>
                    
                </div>
                
            </div>  
    </div>
        
    </div>
        
    </main>
    
    <footer>
    
    </footer>
    <!-- /Start your project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>
