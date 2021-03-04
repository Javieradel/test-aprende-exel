<?php
session_start();
    $develop='true'; //$develop='false';
    require_once('./determine-country.php');
    require_once('./list-flags.php');
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $develop ? $ip = '45.186.147.43' : $ip = $_SERVER['REMOTE_ADDR'];
    $coutry= determineCt($ip);
    
    $dataCountry=extractDataCountry($coutry);
    $_SESSION['dataCountry']= $dataCountry;
    //var_dump($dataCountry);

    $listCountrys=extractDataCountrys();
    //var_dump($listCountrys);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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

    <main id="root" class="root">
        <section class="container ">
            <header class="header-form row">
                <h2 class="title-header col-auto d-block d-md-none">
                    Postulación
                </h2>
            </header>

            <main id="form-container" class="form-container  row justify-content-center">
                <article class="sub-cont col-11 col-md-9 col-lg-6 p-0">

                    <div class="progress">
                        <div id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <form  method="post" action="form.php"  class="form-steped row justify-content-center align-content-center">

                        <div id="step-1" class="step  animate__animated act d-none form-group col-10">

                            <label for="input-name" class="row justify-content-lg-start align-items-center pl-0">
                                <!-- fontawesome icon pro-->
                                <picture class="col-auto pl-0">
                                    <svg class="label-icon-in" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-5x">
                                        <path d="M313.6 288c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zM416 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 56.5 0 102.4 45.9 102.4 102.4V464zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path>
                                    </svg>
                                </picture>
                                <!-- fontawesome icon pro-->

                                <div class="col-auto">
                                    <span>Nombre</span>
                                </div>
                            </label>

                            <input type="text" name="name" requiered class="input- form-control" id="input-name" aria-describedby="nameHelp" placeholder="Ejem: Peter Dallar" required>

                        </div>

                        <div id="step-2" class="step  animate__animated d-none form-group col-10">
                            <label for="input-email" class="row justify-content-lg-start align-items-center pl-0">

                                <!-- fontawesome icon pro-->
                                <picture class="col-auto pl-0">
                                    <svg class="label-icon-in" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path>
                                    </svg>
                                </picture>
                                <!-- fontawesome icon pro-->

                                <div class="col-auto">
                                    <span> Email</span>
                                </div>
                            </label>

                            <input type="email" minlength="5" name="email" required class="input- form-control" id="input-email" aria-describedby="emailHelp" placeholder="ejemplo@ejemplo.com">

                        </div>

                        <div id="step-3" class="step  animate__animated d-none form-group col-10">
                            <label for="input-name" class="row justify-content-lg-start align-items-center pl-0">
                                <!-- fontawesome icon pro-->
                                <picture class="col-auto pl-0">
                                    <svg id="telf" class="label-icon-in" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone fa-w-16 fa-5x">
                                        <def>
                                            <style>
                                                svg#telf #icon {
                                                    transform: rotate(95deg);
                                                    transform-origin: center center;
                                                }
                                            </style>
                                        </def>
                                        <path id="icon" d="M487.8 24.1L387 .8c-14.7-3.4-29.8 4.2-35.8 18.1l-46.5 108.5c-5.5 12.7-1.8 27.7 8.9 36.5l53.9 44.1c-34 69.2-90.3 125.6-159.6 159.6l-44.1-53.9c-8.8-10.7-23.8-14.4-36.5-8.9L18.9 351.3C5 357.3-2.6 372.3.8 387L24 487.7C27.3 502 39.9 512 54.5 512 306.7 512 512 307.8 512 54.5c0-14.6-10-27.2-24.2-30.4zM55.1 480l-23-99.6 107.4-46 59.5 72.8c103.6-48.6 159.7-104.9 208.1-208.1l-72.8-59.5 46-107.4 99.6 23C479.7 289.7 289.6 479.7 55.1 480z" class=""></path>
                                    </svg>
                                </picture>
                                <!-- fontawesome icon pro-->

                                <div class="col-auto">
                                    <span>Teléfono</span>
                                </div>
                            </label>
                            <div class="container-fluid">
                                <div class="row justify-content-start">
                                    <div class="col-4 pr-1 pl-0">
                                        <select required class="input- form-control" id="exampleFormControlSelect1">
                                            <?php
                                            for ($i=0; $i < count($listCountrys); $i++) { 

                                                if($listCountrys[$i]->alpha2Code == $dataCountry[0]->alpha2Code){
                                                    echo "
                                                    <option selected=\"selected\"  value=\"+".$listCountrys[$i]->callingCodes[0]."\">
                                                            <span>".generateFlag(strtolower($listCountrys[$i]->alpha2Code),$abcu)." | +".$listCountrys[$i]->callingCodes[0]."</span>
                                                    </option>";
                                                }else{
                                                    echo "
                                                    <option value=\"+".$listCountrys[$i]->callingCodes[0]."\">
                                                            <span>".generateFlag(strtolower($listCountrys[$i]->alpha2Code),$abcu)." | +".$listCountrys[$i]->callingCodes[0]."</span>
                                                    </option>";
                                                }
                                                    

                                            }
                                            
                                            ?>
                                        </select>

                                    </div>
                                    <div class="col-8">
                                        <input type="tel" name="telf" maxlength="20" required class="input- form-control" id="input-telf" aria-describedby="telfHelp" placeholder="ingrese teléfono">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="step-4" class="step   animate__animated  d-none form-check col-10">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-12 pol-container">

                                        <p class="accept-pol">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, asperiores ratione. Nisi nulla est facilis sed repellat facere itaque ut, expedita labore cumque! Libero corrupti eum eligendi ab ea sit.
                                        </p>

                                        <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Acepto los términos</label>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step-5" class="step   animate__animated  d-none form-check col-10">
                            <div class="container-fluid ">
                                <div class="row">

                                    <div class="col-12 submit ">
                                        <button type="submit" class="btn btn-primary w-75 ">Enviar</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
                    <div class="nav-btn  container">
                        <nav class="row justify-content-between">
                            <button  id="btn-back" class="col-4 btn btn-light"> &lt; </button>
                            <!--BTN SUCCESS == NEXT-->
                            <button disabled id="btn-next" class="col-4 btn"> &gt; </button>
                        </nav>
                    </div>

                </article>
            </main>
        </section>
    </main>
    <footer></footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>
