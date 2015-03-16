/**
 * Created with JetBrains PhpStorm.
 * User: Alicia
 * Date: 08/11/13
 * Time: 19:04
 * To change this template use File | Settings | File Templates.
 */


/* Open Disclaimer */
$(function() {
    $( "#dialog" ).dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 200
        },
        hide: {
            effect: "blind",
            duration: 200
        }
    });

    $( "#opener" ).click(function() {
        $( "#dialog" ).dialog( "open" );
    });
});

/* The instant search for homepage */
$(document).ready(function() {
    $("#txtSearch").keyup(function() {
        var searchValue = $(this).val();
        if(searchValue === "") {
            $(".sec-tile").show();
            return;
        }
        $(".sec-tile").hide();
        $(".sec-tile a p:contains(" + searchValue + "), .sec-tile a h3:contains(" + searchValue + ")").parent().parent().show();
    });
});

/* Scroll to top */
$(function () {
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 800, // Speed back to top (ms)
        animation: 'slide', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: 'Scroll to top', // Text for element
        activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });
});


/* Form validation functions for add section page*/

$(".inputSection input").focus(function(){
    $(this).parent().parent().children(".col3").children(".fieldDescription").fadeIn().css("display","inline");
});

$(".inputSection input").blur(function(){
    $(".fieldDescription").fadeOut();
})
