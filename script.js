function toggleMenu() {
    var menu = document.getElementById("menu");
    var btn = document.getElementById("icon");
    if (menu.style.display === "none") {
        menu.style.display = "block";
       menu.style.opacity = "1";
       menu.style.transition = "opacity 5s ease-in-out";



    } else {
        menu.style.opacity = "0";
        menu.style.transition = "opacity 0.5s ease-in-out";
        setTimeout(function(){
            menu.style.display = "none";


        }, 500)



    }
}
