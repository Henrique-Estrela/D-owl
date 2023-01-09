<?php 


echo '<section id="download" class="mp3">
<div class="centralize-lado t-4"><img class="img-yt" src="'.$saida->thumbnail_url.'"alt=""></div>
<div class="titlec centralize-lado t--1 tcenter"><ul class="t-4"><li><span class="title" onmousemove="linha(2)" onmouseout="linha(1)">'.$saida->title.'</span></li></ul></div>
<div class=" centralize-total t-5 b-3">
            <iframe id="buttonApi " src="https://convert2mp3s.com/api/button/mp3?url='.$YT.'"
            width="100%" height="100%"  allowtransparency="true" scrolling="no" style="border:none; background-color: #000; border: #ff2f1c solid 5px;  height: 20vh; border-radius: 3rem;  width: 60vw;background-color: rgb(255, 255, 255) !important;"></iframe>
            </div></section>';

?>