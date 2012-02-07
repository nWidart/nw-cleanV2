$('.hover-image img,').live({
        mouseenter: function() { 
           $(this).stop().fadeTo(300, 0.3);
        },
        mouseleave: function() {
           $(this).stop().fadeTo(400, 1);
        }
    });
    
    
    
$('a[rel=twipsy]').twipsy({'placement': 'above'});
