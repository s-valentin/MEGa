var id = null;
function slideLogo(){
    var elem = document.getElementById("slideLogo");
    var elem2 = document.getElementById("canvas");
    var elem3 = document.getElementById("star-wrapper");
    var pos = 60;
    clearInterval(id);
    id = setInterval(frame, 10);
    function frame(){
        if(pos == 90){
            elem.style.animation = 0 + 's';
            clearInterval(id);
            elem2.style.visibility = "visible";
        }
        else{
            pos++;
            elem.style.bottom = pos + '%';
        }
    }
}