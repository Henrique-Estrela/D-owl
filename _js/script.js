function linha(num) {
    document.querySelector(".linha").style.transition = "all 0.5s";

    if (num == 1){
        document.querySelector(".linha").style.width = "10vw";
    }else{
        document.querySelector(".linha").style.width = "30vw";
    }
   
    
}

function escolha(num2) {
    document.querySelector('.nome').style.display = "none";

    switch (num2) {
        case 1:
            document.querySelector('.mp3').style.display ="block";
            document.querySelector('#type').style.display = "none";
            break;
        case 2:
            document.querySelector('.mp4').style.display ="block ";
            document.querySelector('#type').style.display = "none";
            break;        
        default:
            break;
    }
}


function hover(num) {
    var mp3 =  document.querySelector('.imp3')
    var mp4 =  document.querySelector('.imp4')


     if (num == 1) {
         mp3.classList.add('hover');
     } else if (num == 2) {
         mp4.classList.add('hover');
     }
     else{
     mp3.classList.remove('hover');
     mp4.classList.remove('hover');
     }
 }

 function teste() {
    let checkboxmenu = document.querySelector('#checkbox-menu'); 
    let nav = document.querySelector('.navbar-p')
    if (checkboxmenu.checked == false) {
         nav.classList.add('active');
        
    }else{
        nav.classList.remove('active');
    }
 }