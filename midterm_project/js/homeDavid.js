function mouseOverDavid(){
    var test = document.getElementById("david_img");
    
    test.addEventListener("mousedown", function( event ) {
        // highlight the mouseenter target
        test.src = "../pictures/david_front.PNG";
        // reset the color after a short delay
        setTimeout(function() {
            event.target.src = "../pictures/david_side.PNG";
        }, 1000);
    });

}