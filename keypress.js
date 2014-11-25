document.onkeydown = arrowChecker;

function arrowChecker(e) {  
    e = e || window.event;
    if (e.keyCode == '40') { //arrow down
        document.location.href = "http://localhost/scheduleForKids/visualRepresentation.php?page=fast";
    }
    else if (e.keyCode == '38') { //arrow up
        document.location.href = "http://localhost/scheduleForKids/visualRepresentation.php?page=slow";
    }
    else if (e.keyCode == '17') { //CTRL
        document.location.href = "http://localhost/scheduleForKids/timeout.php";
    }
}