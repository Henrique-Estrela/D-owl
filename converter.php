<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>D&owl</title>
    <link rel="icon" href="_imgs/icon1.png" type="icon/png" >


    <!-- CSS -->
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/func.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

    <!-- Js -->
    <script src="_js/script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.3.2/iframeResizer.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <nav class="navbar flex centralize-cima">
        <div class="flex" >
          <a class="flex centralize-cima" href="index.php">
            <img src="_imgs/icon1.png" alt="Logo" width="80" class="centralize-cima l-1">
            <div class="nav-logo nav-link">D&owl</div>
          </a>
        </div>
        <div class="navbar-end">
            <ul class="row">
                <li class="flex"> 
                  <a href="index.php" class="nav-link l-3">Home </a>
                  <a href="" class="nav-link  l-3">Outros</a>
                </li>
            </ul>
        </div>
    </nav>


    <main id="main">
            <div class=" nome centralize-lado">
                <ul class="t-4">
                    <li>
                        <span class="title" onmousemove="linha(2)" onmouseout="linha(1)">CONVERTER PARA</span>
                    </li>
                    <li class="centralize-lado">
                        <div class="linha"></div>

                    </li>
                </ul>
            </div>

            <section>
                <div id="type">
                    <div class="centralize-total">
                            <ul class="flex">
                                <li>
                                    <button onclick="escolha(1)" onmousemove="teste(1)" onmouseout="teste(3)" class="raise btnn"> <i class="icon imp3 material-symbols-outlined">headphones</i> <br> <span class="label_type">MP3</span> </button>
                                </li>

                                <li>
                                    <button onclick="escolha(2)" onmousemove="teste(2)" onmouseout="teste(3)" class="raise btnn "><i class="icon imp4 material-symbols-outlined">Movie</i> <br> <span class="label_type">MP4</span></button>
                                </li>
                            </ul>
                    </div>
                </div>
            </section>
    </main>



    <div id="download">
        <?php


             
            if(!empty($_GET["link"])){
                $YT = $_GET["link"];
                ?>
                <?php
                $saida = simplexml_load_file("https://www.youtube.com/oembed?url=".$YT."&format=xml");
                
                include "_script/mp3.php";
                include "_script/mp4.php";
            }
            
            
        ?>
    </div>


  
    
<script>iFrameResize({ log: false, minHeight: 360 }, '#buttonApi')</script>

<?php include '_script/propaganda.php' ?>

 
    
</body>
</html>