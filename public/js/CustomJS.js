function myFunction() {
    var hb = document.getElementById("Hamburger");
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        hb.style.color = "#333";
    } else {
        x.className = "topnav";
        hb.style.color = "#A42419";
    }
}
