(function($) { 

$.fn.saveClicks = function() { 
    $(this).bind('mousedown.clickmap', function(evt) { 
        $.post('/examples/ClickMap/clickmap.php', {  
            x:evt.pageX,  
            y:evt.pageY,  
            l:escape(document.location.pathname) 
        }); 
    }); 
}; 
 
$.fn.stopSaveClicks = function() { 
     $(this).unbind('mousedown.clickmap'); 
};

})(jQuery); 
