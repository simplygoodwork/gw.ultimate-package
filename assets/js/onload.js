$(document).ready(function() {
    
    nav_access();
    
});



/* Adds a class of 'focus' to focused skip links
----------------------------------------------------------- */
function nav_access() {

    $('ul#nav_access li a').focus(function(){
    	$(this).addClass('focus');
    });
    $('ul#nav_access li a').blur(function(){
    	$(this).removeClass('focus');
    });

}