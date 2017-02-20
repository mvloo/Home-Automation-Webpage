<?php
$group = $_GET['g'];
$action = $_GET['action'];
$intensity = $_GET['int'];
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
                            <div class="col-md-12">
                                <div class="btn-group btn-block" id="form" style="width: 100%;" data-toggle="buttons">
                                    <label class="btn btn-primary active" style="width: 27%;">
                                        <input type="radio" name="options" id="option1" autocomplete="off" value="0" checked> all
                                    </label>
                                    <label class="btn btn-primary" style="width: 25%;">
                                        <input type="radio" name="options" id="option2" autocomplete="off" value="1"> ceiling
                                    </label>
                                    <label class="btn btn-primary" style="width: 24%;">
                                        <input type="radio" name="options" id="option3" autocomplete="off" value="2"> desk
                                    </label>
                                    <label class="btn btn-primary" style="width: 24%;">
                                        <input type="radio" name="options" id="option3" autocomplete="off" value="3"> Floor
                                    </label>
                                </div>
                                <a action="on" class="btn btn-block btn-primary clickable">Turn on</a>
                                <div class="btn-group dropup btn-block btn-primary">
                                    <button class="btn btn-block btn-primary dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">dimming</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item clickable" action="brightness" intensity="25">25%</a>
                                        <a class="dropdown-item clickable" action="brightness" intensity="50">50%</a>
                                        <a class="dropdown-item clickable" action="brightness" intensity="75">75%</a>
                                        <a class="dropdown-item clickable" action="brightness" intensity="100">100%</a>
                                    </div>
                                </div>
                                <a action="off" class="btn btn-block btn-primary clickable" >Turn off</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPTS -->
    
    

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <script language="javascript" type="text/javascript">
        function getRadioVal() {
            var val;
            var form = document.getElementById('form')
            var radios = $("#form").find("input");
            for (var i=0, len=radios.length; i<len; i++) {
                if ( radios[i].checked ) { 
                    val = radios[i].value;
                    break;
                }
            }
            return val;
        }
        
        $(document).ready( function() {
            $('.clickable').click(function () {
                var value = getRadioVal();
                var action = this.getAttribute('action');
                var intensity = this.getAttribute('intensity');
                window.location.href = '?g='+value+'&action='+action+'&int='+intensity; 
                             
            });
        });
        
        
    </script>

</body>

</html>
