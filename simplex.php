<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Metodo Simplex</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #21081a;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/meso-logo.png" alt="" width="30" height="30" />
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="simplex.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="info.php">Informacion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="text-align:center;">
        <h1>Proyecto de investigacion de operaciones</h1>
    </div>
    <div class="container-fluid" style="text-align:center;">
        <h2>Aplicacion para realizacion de metodo simplex en programacion lineal</h2>
    </div>
    <br>
    <br>
    <div class="container">
        <div id="third_container" style="text-align:center;">
            <!-- <ul id="menu">
                        <li><a href="ayuda.php">Ayuda</a></li>
                        <li><span id="menuselected">Simplex()</span></li>
                        <li><a href="simplex.php">Inicio</a></li>
                    </ul> -->
            <div class="border" style="text-align:center;">
                <div class="container" style="text-align:center;">
                    <?php
                    $phase = $_REQUEST['phase'];
                    switch ($phase) {
                        case 0:
                            require_once("phase0.php");
                            break;
                        case 1:
                            require_once("phase1.php");
                            break;
                        case 2:
                            require_once("phase2.5.php");
                            break;
                        case 3:
                            require_once("phasen.php");
                            break;
                        case 4:
                            require_once("phase2n.php");
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 
            <a class="text-white" href="https://www.mesoamericana.edu.gt/">Universidad Mesoamericana Xela</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>