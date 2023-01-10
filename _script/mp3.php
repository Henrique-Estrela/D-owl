<?php 


echo '<section id="download" class="mp3">
<div>
            <a href="javascript:history.back()" class="btn btn-2 label_type centralize-total"><span class="sair material-symbols-outlined">west</span></a>
        </div>
<div class="centralize-lado t-4"><img class="centralize-lado img-yt" src="'.$saida->thumbnail_url.'"alt=""></div>
<div class="titlec centralize-lado t--1 tcenter"><ul class="t-4"><li><span class="title" onmousemove="linha(2)" onmouseout="linha(1)">'.$saida->title.'</span></li></ul></div>
<div class=" centralize-total t-5 b-3">
            <iframe id="buttonApi " src="https://convert2mp3s.com/api/button/mp3?url='.$YT.'"
            width="100%" height="100%"  allowtransparency="no" scrolling="true" style="border:none; background-color: #000; border: #ff2f1c solid 5px;  height: auto; border-radius: 3rem;  width: 90vw;background-color: rgb(255, 255, 255) !important;"></iframe>
            </div></section>';

?>