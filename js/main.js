$(document).ready(function(){

    /* $('.post-head').mouseenter(function() {
        $(this).children().children('.post-info').appendTo('#sidebar');
        $('#sidebarprofile').toggleClass('hidden');  
        $('#sidebar').children('.post-info').toggleClass('hidden');      
    });

    $('.post-head').mouseleave(function() {
        $('#sidebar').children('.post-info').toggleClass('hidden');  
        $('#sidebar').children('.post-info').appendTo('.post-holder')
        $('#sidebarprofile').toggleClass('hidden');
    }); */

    $('.post-head').hover( function() {
        var content = $(this).find('.post-info');
        var container = $('#sidebar');

        console.log(content);

        container.html(content);

        /* .appendTo('#sidebar'); */
        $('#sidebarprofile').toggleClass('hidden');  
        $('#sidebar').children('.post-info').toggleClass('hidden');      
    });

});


// look into cloning