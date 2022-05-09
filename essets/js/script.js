
function menu() {
    var x = document.getElementsByClassName("menu")[0];

    if (x.className === "menu") {
        x.className += " responsive";
    } 
    else {
        x.className = "menu";
    }
}

var btscroll = document.getElementById("top");

window.onscroll = function(){myscroll()};

function myscroll() {
    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        btscroll.style.display = "block";
    } 
    else {
        btscroll.style.display = "none";
    }
}

function toTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
} 

var opts = {
    autoScroll : true,
    autoScrollSpeed : 20000
}
