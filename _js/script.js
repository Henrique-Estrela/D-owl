function linha(num) {
    document.querySelector(".linha").style.transition = "all 0.5s";
    switch (num) {
        case 1:
            document.querySelector(".linha").style.width = "8rem";

            break
        case 2:
            document.querySelector(".linha").style.width = "25rem";
            break;
    
        default:
            break;
    }
}