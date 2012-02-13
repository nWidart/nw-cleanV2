$('.hover-image img,').live({
        mouseenter: function() { 
           $(this).stop().fadeTo(300, 0.3);
        },
        mouseleave: function() {
           $(this).stop().fadeTo(400, 1);
        }
    });
    
    
    
$('a[rel=twipsy]').twipsy({'placement': 'above'});


/////////////////////////////////////////////
// Getting latest tweets
/////////////////////////////////////////////

function showTweets(elem, username, number)
{
	var html = '<ul>';

	var tweetFeed = 'http://twitter.com/status/user_timeline/' + username + '.json?count=' + number + '&callback=?'
		$.getJSON(tweetFeed, function(d) {
			$.each(d, function(i,item) {
				html+='<li>'+item.text+'</li>';
			})
			html+="</ul>";
			
			elem.children().fadeOut('fast',function() {
				elem.append(html);
			})
		})
	}
		$(function() {
			$('#error').remove();
			$('#preload').show();
			showTweets($('#tweets'), 'NicolasWidart', 5)
			
		});
