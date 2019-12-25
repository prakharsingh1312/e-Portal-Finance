var global_cookie_prefix = 'NIT';
//pageload functions

function showlogin(){
	$.get('login.php',function(data){
		$('.wrapper').html(data);
		
	});
}
function showAdmin(){
	window.location.href="/admin";
		
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
	
	$('#reset').on('click', function(){
      $('#register-form').reset();
		});
	//Form1 Reponsiveness
		$(document).on('change','#form1_course',function(){ 
			if($('#form1_course').val()=='ug')
			{hide_input('#form1_20');$('#form1_mtech').removeAttr('required');}
			else
			{show_input('#form1_20');$('#form1_mtech').attr('required','1');}
		 });
	$(document).on('change','#form1_recommended',function(){ 
			if($('#form1_recommended').val()=='N')
			{hide_input('#form1_24');$('#form1_signhod').removeAttr('required');}
			else
			{show_input('#form1_24');$('#form1_signhod').attr('required','1');}
		 });
	$(document).on('change','#form1_research',function(){ 
			if($('#form1_research').val()=='no')
			{hide_input('#form1_16');$('#form1_title').removeAttr('required');
			hide_input('#form1_17');$('#form1_accepted_paper').removeAttr('required');}
			else
			{show_input('#form1_16');$('#form1_title').attr('required');
			show_input('#form1_17');$('#form1_accepted_paper').attr('required','1');}
		 });
	//Forms
		$(document).on('click','.login_button',function(){ dologin(); });
		$(document).on('submit','#form1_from',function(){ form1_submit(); return false; });
  
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
		else if (data==0)
			notify('Incorrect Username/Password',4,'danger');
		else 
			notify(data,4,'danger')
	})}

function notify(text, time,type)
{
	$('#notification_div').attr('style','display:block');
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

		if($('#notification_div').is(':visible'))
		{
			$('#notification_inner_cell_div').html(text);
			$('#notification_div').slideDown('fast');
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
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_div').slideUp('fast'); });
		}
	
}}

function hide_input(id){
	$(id).attr("value","");
	$(id).attr('style','pointer-events:none;opacity:.5;')
}
function show_input(id){
	$(id).removeAttr('style');
}
function input_focus(id)
{
	if(offclick_event == 'touchend')
	{
		$('input').blur();
	}
	if(typeof id != 'undefined')
	{
		$(id).focus();
	}
}
function form1_submit(){
	var name=$('#form1_name').val();
	var course=$('#form1_course').val();
	var roll=$('#form1_roll').val();
	var department=$('#form1_department').val();
	var nature_of_event=$('#form1_nature_of_event').val();
	var name_of_event=$('#form1_name_of_event').val();
	var place=$('#form1_place').val();
	var from_date=$('#form1_from_date').val();
	var to_date=$('#form1_to_date').val();
	var no_of_days=$('#form1_no_of_days').val();
	var organizer=$('#form1_name').val();
	
}
	
