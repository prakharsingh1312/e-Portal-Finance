var global_cookie_prefix = 'NIT';
//pageload functions

function showlogin(){
	$.get('login.php',function(data){
		$('.wrapper').html(data);
		
	});
}
function showAdmin(){
	$.get('admin.php',function(data){
		$('.wrapper').html(data);
		
	});
}
function showformlist(){
	$.get('forms.php?list',function(data){
		$('.wrapper').html(data);
		
	});
}
function showtrack(){
	$.get('track.php',function(data){
		$('.wrapper').html(data);
		
	});
}


//document ready functions
$(document).ready( function()
{
	// Detect touch support
	if('ontouchstart' in document.documentElement)
	{
		onclick_event = 'touchstart';
		offclick_event = 'touchend';
	}
	else
	{
		onclick_event = 'mousedown';
		offclick_event = 'mouseup';
	}
	$(document).on('click','.login_button',function(){
		dologin();
	})
});

$(window).load(function()
{
	// Make sure cookies are enabled
	$.cookie(global_cookie_prefix+'_cookies_test', '1');
	var test_cookies_cookie = $.cookie(global_cookie_prefix+'_cookies_test');

	if(test_cookies_cookie == null)
	{
		window.location.replace('error.php?error_code=3');
	}
	else
	{
		$.cookie(global_cookie_prefix+'_cookies_test', null);

		hash();

		$(window).bind('hashchange', function ()
		{
			hash();
		});
	}
});
$(document).ready( function()
{
	$.ajaxSetup({ cache: false });
});
function hash()
{
	var hash = window.location.hash.slice(1);
	if(hash == 'login')
		showlogin();
	else if(hash == 'new')
		showformlist();
	else if (hash == 'track')
		showtrack();
}


function dologin(){
	var username=$('#username').val();
	var password=$('#password').val();
	$.post('login.php?login',{username:username,password:password},function(data){
		if(data==1){
			notify('Logging In',4,'success');
			showAdmin()
		}
		else
			notify('Incorrect Username/Password',4,'danger');
	})}

function notify(text, time,type)
{
	if(typeof text != 'undefined')
	{
		if(typeof notify_timeout != 'undefined')
		{
			clearTimeout(notify_timeout);
		}
		if(type=='success')
			{
				text =  '<div class="alert alert-success" role="alert"><div class="container"><div class="alert-icon"><i class="now-ui-icons ui-2_like"></i></div><strong>'+text+'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="now-ui-icons ui-1_simple-remove"></i></span>            </button>          </div>        </div>';
			}
		else if(type== 'danger')
			{
				text =  '<div class="alert alert-danger" role="alert"><div class="container"><div class="alert-icon"><i class="now-ui-icons objects_support-17"></i></div><strong>'+text+'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="now-ui-icons ui-1_simple-remove"></i></span>            </button>          </div>        </div>';
			}

		$('#notification_inner_cell_div').css('opacity', '1');

		if($('#notification_div').is(':hidden'))
		{
			$('#notification_inner_cell_div').html(text);
			//$('#notification_div').slideDown('fast');
		}
		else
		{
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_inner_cell_div').html(text); $('#notification_inner_cell_div').animate({ opacity: 1 }, 250); });
		}

		notify_timeout = setTimeout(function() { $('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_div').slideUp('fast'); }); }, 1000 * time);
	}
	else
	{
		if($('#notification_div').is(':visible'))
		{
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { //$('#notification_div').slideUp('fast'); });
		}
	)
}}
}
	
