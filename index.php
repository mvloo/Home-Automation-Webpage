<?php
if ($_GET['on']) {
    exec("python lights.py -e lights_on -g 1");
    header('Location: http://192.168.1.160');
}
if($_GET['off']) {
    exec("python lights.py -e lights_off -g 1");
    header('Location: http://192.168.1.160');
}
if($_GET['on2']) {
    exec("python lights.py -e lights_on -g 2");
    header('Location: http://192.168.1.160');
}
if($_GET['off2']) {
    exec("python lights.py -e lights_off -g 2");
    header('Location: http://192.168.1.160');
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
                <li class="nav-item active">
                    <a class="nav-link ">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="colors.php">Colors</a>
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

    <div class="container">
    <div class="row">
            <div class="col-xs-6">
                
                
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight"  onclick="window.location.href ='?on=true';">
                        <img src="/img/day.jpg" class="img-fluid" alt="">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Turn On Lights</h4>
                        <!--Text-->
                        <p class="card-text"></p>
                        <a class="btn btn-primary btn-block" onclick="window.location.href ='?on2=true';">Secondary Lights</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->

            </div>
        
            <div class="col-xs-6">
                
                
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight" onclick="window.location.href ='?off=true';">
                        <img src="/img/night.jpg" class="img-fluid" alt="">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Turn Off Lights</h4>
                        <!--Text-->
                        <p class="card-text"></p>
                        <a class="btn btn-primary btn-block" onclick="window.location.href ='?off2=true';">Secondary Lights</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->

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
