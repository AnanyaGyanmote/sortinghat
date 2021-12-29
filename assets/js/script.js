var removewhite = document.querySelector(".notWhite");
var houses = document.querySelectorAll(".house");
var button = document.querySelector("#button");
var array = document.querySelector(".invisible");

for(var i = 0; i < houses.length; i++){
    houses[i].addEventListener("click", function() {
        removewhite.classList.remove("white");
        //var myServerData = <?=json_encode($value)?>;
        //alert('<?php echo json_encode($users); ?>');
    });
}


