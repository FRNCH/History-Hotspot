$("document").ready(function () {
    var scrollAmount = $("#slidebar .menu-option").width();
    scrollAmount += ((parseInt($("#slidebar .menu-option").css("borderWidth").substr(0, $("#slidebar .menu-option").css("borderWidth").length - 2), 10))*4);
    var scrollPos = 1;
    var maxScrollRight = $("#slidebar .menu-option").length * scrollAmount;
    var timeoutRight = null;
    var timeoutLeft = null;

    function scrollRight() {
        scrollPos += scrollAmount;
        if (scrollPos > maxScrollRight - $("#slidebar").width()) {
            scrollPos = maxScrollRight - scrollAmount * 4;
        }

        $("#slidebar").animate({
            scrollLeft: scrollPos
        });
    }

    function scrollLeft() {
        scrollPos -= scrollAmount;
        if (scrollPos < 0) {
            scrollPos = 0;
        }
        $("#slidebar").animate({
            scrollLeft: scrollPos
        });
    }
    
    //Code for menuTab to open and close
    $("#menuTab").click(function () {
        if ($("#menuTab > input").is(":checked")) {
            $("#navMenu").slideDown();
        }
        else {
            $("#navMenu").slideUp();
        }
    });

    //Open and close the submenus on click
    $(".submenu-toggle").click(function (e) {
        $(e.target).next(".submenu").slideToggle();
    });

    $("#nextButton").on('click', function () {
        scrollRight();
    });

    $("#previousButton").on('click', function () {
        scrollLeft();
    });
});