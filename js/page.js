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

/* Overide :contains, to make non-case-sensitive*/
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
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
});

/* Google Analytics */
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32531183-7', 'auto');
  ga('send', 'pageview');

