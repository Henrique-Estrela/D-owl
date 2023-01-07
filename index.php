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


</head>

<body>

    <nav class="navbar flex centralize-cima">
        <div class="flex" >
          <a class="flex centralize-cima" href="#">
            <img src="_imgs/icon1.png" alt="Logo" width="80" class="centralize-cima l-1">
            <div class="nav-logo nav-link">D&owl</div>
          </a>
        </div>
        <div class="navbar-end">
            <ul class="row">
                <li class="flex"> 
                  <a href="" onmousemove="linha(4)" onmouseout="linha(3)" class="nav-link l-3">Home </a>
                  <a href="" onmousemove="linha(5)" onmouseout="linha(6)" class="nav-link  l-3">Outros</a>

                </li>
              
            </ul>
        </div>
    </nav>
    <main id="main">
            <div class="centralize-lado">
                <ul class="t-4">
                    <li>
                        <span class="title" onmousemove="linha(2)" onmouseout="linha(1)">CONVERSOR YOUTUBE</span>
                    </li>
                    <li class="centralize-lado">
                        <div class="linha"></div>

                    </li>
                </ul>
            </div>

            <section class="centralize-lado">

                <div class="caixa centralize-lado">
                    <form method="GET" action="https://convert2mp3s.com/api/button/{mp3}?url={https://www.youtube.com/watch?v=3wd3j9-piek}">
                        <ul class="">
                            <label class="text" >Insira o seu link do YouTube:</label>
                            <li class="centralize-lado">
                                <input placeholder="https://www.youtube.com/Exemplo" type="url" name="link" id="link" required> 
                            </li>
                            <li class="centralize-lado">
                                <input type="submit" class="btn" value="Converter">
                            </li>
                        </ul>
                    </form>
                </div>
                
                
            </section>
    </main>
    <section id="download" class="centralize-total t-5">

        <iframe id="buttonApi " src="https://convert2mp3s.com/api/button/mp4?url=https://www.youtube.com/watch?v=3wd3j9-piek"
        width="10%" height="10%"  allowtransparency="true" scrolling="no" style="border:none; background-color: #000; border: #ff2f1c solid 5px;  height: 20vh; border-radius: 3rem;  width: 60vw;background-color: rgb(255, 255, 255) !important;"></iframe>
        
    </section>
    <iframe id="buttonApi " src="https://convert2mp3s.com/api/button/mp3?url=https://www.youtube.com/watch?v=3wd3j9-piek"
        width="10%" height="10%"  allowtransparency="true" scrolling="no" style="border:none; background-color: #000; border: #ff2f1c solid 5px;  height: 20vh; border-radius: 3rem;  width: 60vw;background-color: rgb(255, 255, 255) !important;"></iframe>
   
<script>iFrameResize({ log: false, minHeight: 360 }, '#buttonApi')</script>

    <section id="propaganda">
        <a href="https://jovemnerd.com.br/nerdbunker/one-piece-film-red-novo-filme-animado-da-franquia-ganha-teaser-e-poster/"></a>
    </section>
 
    
</body>
</html>