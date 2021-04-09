var id = null;
function slideLogo(){
    var elem = document.getElementById("slideLogo");
    var elem2 = document.getElementById("canvas");
    var pos = 50;
    var op = 0;
    clearInterval(id);
    id = setInterval(frame, 10);
    function frame(){
        if(pos == 90){
            elem.style.animation = 0 + 's';
            clearInterval(id);
        }
        else {
            pos++;
            op+=2;
            elem.style.bottom = pos + '%';
            elem2.style.opacity = op + '%';
        }
    }
}