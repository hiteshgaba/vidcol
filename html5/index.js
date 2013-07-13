var mouse_is_inside = false;

$(document).ready(function()
{
$('#search1').click(function(){
	
$('#searchbar').show(500);
$('#searchbar input').focus();

});
    $('#searchbar').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").mouseup(function(){ 
        if(! mouse_is_inside) $('#searchbar').hide(500);
    });
});