var i=0, text;
    text="Welcome to Math Equation Game...\n The place where you can learn math interactively!";
    function typing()
    {
    if(i<text.length )   
        {
            if(text.charAt(i) == '\n') 
            document.getElementById("text").innerHTML += "<br>";
        else
            document.getElementById("text").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing,100);
            
        }
    }
 typing();