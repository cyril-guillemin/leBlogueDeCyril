function displayNav() {
    let nav = document.getElementById("nav");
    let navClass = nav.className;
    if(navClass == "header-no_nav") {
        nav.className = "header-nav";
    }
    else {
        nav.className = "header-no_nav";
    }
}