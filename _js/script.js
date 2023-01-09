function linha(num) {
    document.querySelector(".linha").style.transition = "all 0.5s";

    if (num == 1){
        document.querySelector(".linha").style.width = "8rem";
    }else{
        document.querySelector(".linha").style.width = "25rem";
    }
   
    
}

function empty(n){
	return !(!!n ? typeof n === 'object' ? Array.isArray(n) ? !!n.length : !!Object.keys(n).length : true : false);
}

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.btn').addEventListener('click', function() {
        if (empty(document.querySelector('#linkyt'))) {
            document.querySelector('#linkyt').style.display ="none";
            console.log('vazia')
        } else {
            document.querySelector('#linkyt').style.display ="none";
            console.log('deboa')

        }
    })
  });

function escolha(num2) {
    
    switch (num2) {
        case 1:
            document.querySelector('.mp4').style.display ="";
            document.querySelector('#type').style.display = "";
            break;
        case 2:
            document.querySelector('.mp3').style.display ="";
            document.querySelector('#type').style.display = "";
            break;        
        default:
            break;
    }
}


