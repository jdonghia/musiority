window.onload = function(){

    "use strict";
    var $btn = document.querySelector(".aside__button");
    var $aside = document.querySelector(".aside");

    $btn.addEventListener("click", function(){
        if ($aside.style.display === "none"){
            $aside.style.display = "block";
        } else {
            $aside.style.display = "none";
        }

    })

}