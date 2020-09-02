// ---------------------------event pour section events---------------------------------

var x = document.getElementById("eventImg").firstElementChild;
var y = document.getElementById("eventImg").children[1];
var z = document.getElementById("eventImg").lastElementChild;

var a = document.getElementById("myLocation").firstElementChild;
var b = document.getElementById("myLocation").children[1];
var c = document.getElementById("myLocation").lastElementChild;

var m = document.getElementById("exactDate").firstElementChild;
var n = document.getElementById("exactDate").children[1];
var l = document.getElementById("exactDate").lastElementChild;



function myFunction1() {

    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
    a.style.display = "block";
    b.style.display = "none";
    c.style.display = "none";
    m.style.display = "block";
    n.style.display = "none";
    l.style.display = "none";



}

function myFunction2() {

    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "none";
    b.style.display = "block";
    a.style.display = "none";
    c.style.display = "none";
    n.style.display = "block";
    m.style.display = "none";
    l.style.display = "none";

}

function myFunction3() {

    z.style.display = "block";
    y.style.display = "none";
    x.style.display = "none";
    c.style.display = "block";
    b.style.display = "none";
    a.style.display = "none";
    l.style.display = "block";
    n.style.display = "none";
    m.style.display = "none";
}

// addactive event
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("myBtnEvent");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("Active");
        current[0].className = current[0].className.replace(" Active", "");
        this.className += " Active";
    });
}