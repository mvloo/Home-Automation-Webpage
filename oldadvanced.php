<?php
$group = $_GET['g'];
$action = $_GET['action'];
$intensity = $_GET['int'];
if ($action == 'allon') {
    exec('python lights.py -e lights_on');
    header('Location: http://192.168.1.160/advanced.php');
}
if ($action == 'alloff') {
    exec('python lights.py -e lights_off');
    header('Location: http://192.168.1.160/advanced.php');
}
if ($action == 'on') {
    exec('python lights.py -e lights_on -g ' . $group);
    header('Location: http://192.168.1.160/advanced.php');
}
if ($action == 'brightness') {
    exec('python lights.py -e set_brightness -g' . $group . ' -a ' . $intensity);
    header('Location: http://192.168.1.160/advanced.php');
}
if ($action == 'off') {
    exec('python lights.py -e lights_off -g ' . $group);
    header('Location: http://192.168.1.160/advanced.php');
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
                <li class="nav-item">
                    <a class="nav-link" href="colors.php">Colors</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link">Advanced</a>
                </li>
            </ul>
            
        </div>
    
    </nav>
    </header>
    <main>

    <!-- Start your project here-->

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="col-xs-6">
                                <a class="btn btn-block btn-primary" onclick="window.location.href='?action=allon';">Turn on all lights</a>
                            </div>
                            <div class="col-xs-6">
                                <a class="btn btn-block btn-primary" onclick="window.location.href='?action=alloff';">Turn off all lights</a>
                            </div>
                            <div class="col-xs-4">
                                <h4> Ceiling </h4>
                                <a class="btn btn-block btn-primary" onclick="window.location.href='?g=1&action=on';">Turn on</a>
                                <div class="btn-group dropup btn-block btn-primary">
                                    <a class="btn btn-block btn-primary dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">dimming</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="advanced.php?g=1&action=brightness&int=25">25%</a>
                                        <a class="dropdown-item" href="advanced.php?g=1&action=brightness&int=50">50%</a>
                                        <a class="dropdown-item" href="advanced.php?g=1&action=brightness&int=75">75%</a>
                                        <a class="dropdown-item" href="advanced.php?g=1&action=brightness&int=100">100%</a>
                                    </div>
                                </div>
                                <a class="btn btn-block btn-primary" onclick="window.location.href='?g=1&action=off';">Turn off</a>
                            </div>
                            <div class="col-xs-4">
                                <h4> Desk </h4>
                                <a class="btn btn-block btn-primary" onclick="window.location.href='?g=2&action=on';">Turn on</a>
                                <div class="btn-group dropup btn-block btn-primary">
                                    <a class="btn btn-block btn-primary dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">dimming</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="advanced.php?g=2&action=brightness&int=25">25%</a>
                                        <a class="dropdown-item" href="advanced.php?g=2&action=brightness&int=50">50%</a>
                                        <a class="dropdown-item" href="advanced.php?g=2&action=brightness&int=75">75%</a>
                                        <a class="dropdown-item" href="advanced.php?g=2&action=brightness&int=100">100%</a>
                                    </div>
                                </div>
                                <a class="btn btn-block btn-primary" onclick="window.location.href='?g=2&action=off';">Turn off</a>
                            </div>
                            <div class="col-xs-4">
                                <h4> Floor </h4>
                                <a class="btn btn-block btn-primary" onclick="window.location.href='?g=3&action=on';">Turn on</a>
                                <div class="btn-group dropup btn-block btn-primary">
                                    <a class="btn btn-block btn-primary dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">dimming</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="advanced.php?g=3&action=brightness&int=25">25%</a>
                                        <a class="dropdown-item" href="advanced.php?g=3&action=brightness&int=50">50%</a>
                                        <a class="dropdown-item" href="advanced.php?g=3&action=brightness&int=75">75%</a>
                                        <a class="dropdown-item" href="advanced.php?g=3&action=brightness&int=100">100%</a>
                                    </div>
                                </div>
                                <a class="btn btn-block btn-primary" onclick="window.location.href='?g=3&action=off';">Turn off</a>
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
