$(document).ready(function() {
    $(window).scroll(function() {
        var mesafe = $(window).scrollTop();
        if (mesafe > 100) {
            $(".yukarıcık").fadeIn(3000);
            $(".menum").css({ "background-color": "#161616" });
        } else {
            $(".yukarıcık").fadeOut();
            $(".menum").css({ "background-color": "transparent" });
        }
    });
    $(".bolumbes .bir").mouseover(function() {
        $(".bresim").fadeIn(2000);
    });
    $(".bolumbes .bir").mouseout(function() {
        $(".bresim").fadeOut();
    });



    $(".bolumbes .iki").mouseover(function() {
        $(".cresim").fadeIn(2000);
    });
    $(".bolumbes .iki").mouseout(function() {
        $(".cresim").fadeOut();
    });


    $(".bolumbes .üc").mouseout(function() {
        $(".dresim").fadeOut();
    });
    $(".bolumbes .üc").mouseover(function() {
        $(".dresim").fadeIn(2000);
    });



    $(".bolumbes .dort").mouseover(function() {
        $(".eresim").fadeIn(2000);
    });
    $(".bolumbes .dort").mouseout(function() {
        $(".eresim").fadeOut();
    });
});