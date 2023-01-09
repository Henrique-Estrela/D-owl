function linha(num) {
    document.querySelector(".linha").style.transition = "all 0.5s";

    if (num == 1){
        document.querySelector(".linha").style.width = "8rem";
    }else{
        document.querySelector(".linha").style.width = "25rem";
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


