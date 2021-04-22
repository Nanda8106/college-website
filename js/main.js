function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("hours").innerHTML = h;
    document.getElementById("minutes").innerHTML = m;
    document.getElementById("seconds").innerHTML = s;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    return i;
}

function letsee() {
    document.querySelector(".see-tb").style.display = "block";
    document.querySelector(".see").style.display = "none";
    document.querySelector(".hide").style.display = "block";

}

function lethide() {
    document.querySelector(".see-tb").style.display = "none";
    document.querySelector(".hide").style.display = "none";
    document.querySelector(".see").style.display = "block";
}


