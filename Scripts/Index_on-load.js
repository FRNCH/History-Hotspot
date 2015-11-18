$("document").ready(function () {
    $('iframe').on('load', function () {

        var frameHeight = $(this).contents().height();
        var frameWidth = $(this).contents().width();
        
        $(this).css("height", frameHeight);
        $(this).css("width", frameWidth);



    });
});

//function resizeFrame(frameID) {
//        var frameHeight = document.getElementById(frameID).contentWindow.document.body.scrollHeight;
//        var frameWidth = document.getElementById(frameID).contentWindow.document.body.scrollWidth;

//        document.getElementById(frameID).height = frameHeight + "px";
//        document.getElementById(frameID).width = frameWidth + "px";
//    }