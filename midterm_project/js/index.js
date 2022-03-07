function mouseOverTanner(){
    var test = document.getElementById("tanner_img");
    
    test.addEventListener("mousedown", function( event ) {
        // highlight the mouseenter target
        test.src = "../pictures/tanner_front.PNG";
        // reset the color after a short delay
        setTimeout(function() {
            event.target.src = "../pictures/tanner_side.PNG";
        }, 1000);
    });

}