<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="https://aprende-excel.com/assets/img/favicon-32x32.png">
    <title>Postulación | Javier Gomez</title>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- VENDOR -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- STYLE -->
    <link rel="stylesheet" href="./assets/css/index.css">
    
</head>

<body>
    <header class="header-main pt-2">
        <nav class="container-fluid header-cont">
            <ul class="list-item-header row justify-content-between align-items-center text-center">
                <li class="col-6 col-sm-4 text-left col-md-2">
                    <picture>
                        <img src="./assets/img/logojpg.jpg" alt="aprende-excel.com logo">
                    </picture>
                </li>

                <li class="col-4 d-none d-md-block">
                    <h2>Postulación</h2>
                </li>
                <li class="col-4 col-md-2">
                    <a href="wa.link/rm2p1b">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="root" class="root align-content-center">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-4">
                    <svg class="w-100 mr-auto ml-auto"  viewBox="0 0 512 512"   xmlns="http://www.w3.org/2000/svg"><g><path d="m504.5 159.5h-22.5v-114.5c0-4.142-3.357-7.5-7.5-7.5h-437c-4.142 0-7.5 3.358-7.5 7.5v114.5h-22.5c-4.142 0-7.5 3.358-7.5 7.5v180c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-172.5h150.011l68.198 52.282c6.604 5.049 14.485 7.718 22.791 7.718 8.312 0 16.191-2.67 22.786-7.723.585-.448 68.2-52.277 68.2-52.277h150.014v285h-482v-82.5c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v90c0 4.142 3.358 7.5 7.5 7.5h497c4.143 0 7.5-3.358 7.5-7.5v-300c0-4.142-3.357-7.5-7.5-7.5zm-459.5 0v-77.072c.604.523 1.23 1.012 1.828 1.471l98.617 75.601zm224.699 55.343c-3.989 3.056-8.714 4.657-13.699 4.657-4.984 0-9.715-1.603-13.672-4.628-1.869-1.433-186.931-143.297-188.46-144.478-5.647-4.326-8.868-10.84-8.868-17.894h422c0 7.053-3.219 13.567-8.827 17.872-1.867 1.43-186.403 142.892-188.474 144.471zm197.301-132.338v76.995h-100.445z"/><path d="m197.665 319.669 3.771-9.902h25.845l3.729 9.881c1.134 3.003 3.987 4.854 7.019 4.854.88 0 1.775-.156 2.646-.485 3.875-1.462 5.832-5.79 4.369-9.665l-22.325-59.158c-.026-.069-.053-.137-.081-.204-1.372-3.336-4.587-5.49-8.193-5.49-3.618.003-6.834 2.164-8.201 5.505-.023.057-.046.113-.067.17l-22.53 59.155c-1.474 3.871.468 8.204 4.339 9.678 3.873 1.478 8.205-.468 9.679-4.339zm16.753-43.987 7.202 19.085h-14.47z"/><path d="m333.885 249.5c-4.143 0-7.5 3.358-7.5 7.5v60c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-15.536l21.698 20.934c1.455 1.404 3.332 2.103 5.206 2.103 1.965 0 3.927-.767 5.398-2.292 2.876-2.981 2.791-7.729-.19-10.605l-26.754-25.811 24.492-22.513c3.05-2.803 3.25-7.547.446-10.597-2.803-3.049-7.548-3.249-10.597-.446l-19.7 18.108v-13.345c.001-4.142-3.357-7.5-7.499-7.5z"/><path d="m123.885 249.5c-4.142 0-7.5 3.358-7.5 7.5v60c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-23.529h26.521v23.529c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-60c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v21.471h-26.521v-21.471c0-4.142-3.358-7.5-7.5-7.5z"/><path d="m84.001 324.5c4.142 0 7.5-3.358 7.5-7.5v-52.5h9.134c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-33.135c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h9.001v52.5c0 4.142 3.358 7.5 7.5 7.5z"/><path d="m304.635 249.612c-4.143 0-7.5 3.358-7.5 7.5v35.829l-27.686-40.091c-1.864-2.701-5.266-3.874-8.404-2.898-3.133.977-5.268 3.878-5.268 7.16v59.888c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-35.829l27.686 40.091c1.427 2.066 3.755 3.239 6.173 3.239.743 0 1.494-.111 2.231-.34 3.133-.977 5.268-3.878 5.268-7.16v-59.888c0-4.143-3.358-7.501-7.5-7.501z"/><path d="m256.086 351.101 17.946 27.482v28.417c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-28.423l17.793-27.333c2.26-3.472 1.278-8.118-2.193-10.377-3.472-2.258-8.117-1.277-10.377 2.194l-12.732 19.559-12.877-19.72c-2.266-3.468-6.913-4.444-10.38-2.179-3.469 2.264-4.444 6.911-2.18 10.38z"/><path d="m402.809 339.5c-4.143 0-7.5 3.358-7.5 7.5v41.287c0 9.054 4.332 16.413 12.874 21.87 4.497 2.875 9.573 4.336 15.087 4.344 4.793 0 9.252-1.033 13.297-3.07 12.755-6.426 15.433-16.156 15.433-23.188v-41.243c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v41.243c0 2.874-.816 6.584-7.181 9.79-1.96.987-4.087 1.467-6.504 1.467-2.674-.004-4.974-.652-7.056-1.983-4.939-3.155-5.951-5.972-5.951-9.23v-41.287c.001-4.142-3.357-7.5-7.499-7.5z"/><path d="m308.747 377c0 20.678 16.822 37.5 37.5 37.5s37.5-16.822 37.5-37.5-16.822-37.5-37.5-37.5-37.5 16.822-37.5 37.5zm37.5-22.5c12.406 0 22.5 10.093 22.5 22.5s-10.094 22.5-22.5 22.5-22.5-10.093-22.5-22.5 10.094-22.5 22.5-22.5z"/></g></svg>
                </div>
            </div>
            <div class="row justify-content-center align-content-center">
                
                <div class="col-4 justify-content-center">
        
                    <a class="w-100 btn btn-primary mr-auto ml-auto" href="wa.link/rm2p1b">Contáctame</a>

                </div>
            </div>
            
        </div>
    </main>
    <footer></footer>
     <script> window.onload=()=>{window.history.replaceState(null,'',"gracias-<?php echo $_SESSION['dataCountry'][0]->alpha2Code?>.html");}
</script>
</body>

</html>
