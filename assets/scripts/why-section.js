$(document).ready(function () {
    $(".row-1-box").hover(function () { // on hover
        // alert("hover");
        $(".card-row-2").css("margin-top", "15rem", "background-color", "red");
    }, function () {//on mouseout
        $(".card-row-2").css("margin-top", "4rem");
    });
});

// how to add margin top to .card-row-2 while hover .row-1-box ?