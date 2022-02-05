function toggle() {
    if (document.getElementById("nav-ul").style.display=="block"){
        document.getElementById("nav-ul").style.display=""
        document.getElementById("nav-toggle-alt").style.display="none"
    }
    else{
        document.getElementById("nav-ul").style.display="block";
        document.getElementById("nav-toggle-alt").style.display="block"
    }
}