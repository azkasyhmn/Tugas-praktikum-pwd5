let getTombol = document.getElementById("tombol");

window.addEventListener("scroll", function(){
    if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        getTombol.classList.add("show");
    } else {
        getTombol.classList.remove("show");
    }
    
});

getTombol.addEventListener("click", function(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

});