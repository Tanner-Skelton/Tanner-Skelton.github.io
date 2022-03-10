function mouseOverJohn(){
    var test = document.getElementById("john_img");
    
    test.addEventListener("mousedown", function( event ) {
        // highlight the mouseenter target
        test.src = "../pictures/john_front.PNG";
        // reset the color after a short delay
        setTimeout(function() {
            event.target.src = "../pictures/john_side.PNG";
        }, 1000);
    });
}