"use strict";

$(document).ready( () => {
    console.log("Script is running!");
    $("#image_rollover img").each( (index, img) => {

        $(img).mouseover( function(){
            const src= $(this).attr("src");
            const new_src = src.replace("-c.jpg", "-bl.jpg");
            $(this).attr("src", new_src);
        });

        $(img).mouseout( function() {
            const src = $(this).attr("src");
            const new_src = src.replace("-bl.jpg", "-c.jpg");
            $(this).attr("src", new_src);
        });

    });
});
