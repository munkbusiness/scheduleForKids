document.onkeydown = arrowChecker;

function arrowChecker(e) {  
    e = e || window.event;
    if (e.keyCode == '32') { //space
        document.location.href = "http://stackoverflow.com/";
    }
    else if (e.keyCode == '37') { //left
        document.location.href = "http://stackoverflow.com/";
    }
    else if (e.keyCode == '39') { //right
       document.location.href = "http://google.com/";
    }
}