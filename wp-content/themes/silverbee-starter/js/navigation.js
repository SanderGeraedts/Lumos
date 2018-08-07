var opens = false;

function openNav() {
    if (!opens) {
        document.getElementById("mySidenav").style.right = "0";
        opens = true
    } else {
        closeNav();
    }
}

function closeNav() {
    document.getElementById("mySidenav").style.right = "-250px";
    opens = false;
}
