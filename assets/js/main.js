
/**
 * @author: Ademola Aina (debascoguy@gmail.com)
 * =============================================
 * UNLICENSED VERSION
 *
 * @params options = {} of the following parameters.
 * @param selector
 * @param state		[Either true|false : denotes whether to show loadingView OR disable loadingView]
 * @param loadingImage	[optional image you would like to use in the loading view]
 * @param imageStyle	[css inline-css style you would to add to the loading image...e.g: to reduce the size...Use fn: addImageStyle() | setImageStyle() to add/set/change inline-css of loadingView image]
 * @returns
 */

function loadingView(){
	var LoadingView = (typeof LoadingView === 'undefined') ? {} : LoadingView;

LoadingView = function(options) {
	var defaultOption = {};

	defaultOption.selector = "body";
	defaultOption.state = true;
	defaultOption.image = "loadingImage.gif";			//You can change this anytime anyday based on your image location.
	defaultOption.imageClassName = "loadingImage";
	defaultOption.imageStyle = "position:absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);";

	 if (typeof options === 'undefined') {
	        options = defaultOption;
	 }

	 var getOption = function(field){
	        return (typeof options[field] === 'undefined' || undefined === options[field] || null===options[field] || "" === options[field] ) ? defaultOption[field] : options[field];
	 };

	 this.selector = getOption('selector');
	 this.state = getOption('state');
	 this.image = getOption('image');
	 this.imageClassName = getOption('imageClassName');
	 this.imageStyle = getOption('imageStyle');


	 //Set Option Functions
	 this.setState = function(state){
		 this.state = state;
	 }

	 this.setLoadingImage = function(image){
		 this.image = image;
	 }

	 this.setState = function(state){
		 this.state = state;
	 }

	 this.setImageClassName = function(imageClassName){
		 this.imageClassName = imageClassName;
	 }

	 this.addImageClassName = function(imageClassName){
		 this.imageClassName += ' '+imageClassName;
	 }

	 this.setImageStyle = function(imageStyle) {
		 this.imageStyle = imageStyle;
	 }

	 this.addImageStyle = function(imageStyle) {
		 this.imageStyle += ' '+imageStyle;
	 }


	 this.loading = function() {
			if (this.state){
				$(this.selector).css({"opacity": "0.5",
									"filter": "alpha(opacity=50)", /* For IE8 and earlier */
									"position": "relative"});

				$(this.selector).append("<img class='"+this.imageClassName+"' style='"+this.imageStyle+"' src='"+this.image+"' alt='loading...' />");
			}
			else{
				$(this.selector).css({"opacity": "", "filter": "", "position": ""});
				$(this.selector).find("."+this.imageClassName).remove();
			}
	 }

}
}

/**
 * Using Direct JS - Function Call
 * @param selector
 * @param state
 * @param loadingImage
 * @param imageClassName
 * @param imageInlineStyle
 * @returns
 */
function setLoadingView(selector, state, loadingImage, imageClassName, imageInlineStyle)
{
	var call	=	new LoadingView({'selector':selector,
								'state':state,
								'image':loadingImage,
								'imageClassName':imageClassName,
								'imageStyle':imageInlineStyle
					});
	call.loading();
}



/**
 * Minimal Direct JS - Function Call
 * @param selector
 * @param state
 * @param loadingImage
 * @returns
 */
function setElementLoading(selector, state, loadingImage)
{
	setLoadingView(selector, state, loadingImage);
}


//Using jQuery
/**
    $('.body').loadingView();			//start loadingView
    $('.selector').loadingView({'state':true});		//Or start loadingView
    $('.selector').loadingView({'state':false}); 	//Stop LoadingView
*/
(function($) {

    $.fn.loadingView = function (newOptions) {
        return $.loadingView(this, newOptions);
    };

    $.loadingView = function (selector, newOptions) {
        newOptions['selector'] = selector;
        var call = new LoadingView(newOptions);
        call.loading();
        return call;
    };

})(jQuery);





//Loading view
var global_cookie_prefix = 'NIT';
//pageload functions

function showlogin(){
	$.get('login.php',function(data){
		if(data!=1)
		$('.wrapper').html(data);
		else
			showAdmin();
		
	});
}
function showAdmin(){
	window.location.href="./admin";
	$(window).bind('hashchange', function ()
		{
			hash();
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
function showDash(){
	$.get('./pages/dash.php',function(data){
		$('#wrapper').html(data);
		linkChange('#users_dash');
		
	});
}
function showDept(){
	$.get('./pages/dept.php',function(data){
		$('#wrapper').html(data);
		linkChange('#departments');
		
	});
}
function showFormC(){
	$.get('./pages/form_control.php',function(data){
		$('#wrapper').html(data);
		linkChange('#form_control');
	});
}
function showUsers(){
	$.get('./pages/users.php',function(data){
		$('#wrapper').html(data);
		linkChange('#manage_users');
		
	});
}
function showUserP(){
	$.get('./pages/user_profile.php',function(data){
		$('#wrapper').html(data);
		linkChange('#user_profile');
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
	
	$(document).on('click','.logout_button',function(){
		logout();
	})
	
	//Form1 Reponsiveness
		$('#reset').on('click', function(){
      $('#register-form').reset();
		});
		$(document).on('change','#form1_course',function(){ 
			{
			if($('#form1_course').val()=='Under Graduate')
			{hide_input('#form1_20');$('#form1_mtech').removeAttr('required');}
			else
			{show_input('#form1_20');$('#form1_mtech').attr('required','1');}
			}
			{
		if($('#form1_course').val()=='PhD')
			{
				hide_input('#form1_19');$('#form1_cgpa').removeAttr('required');}
			else {show_input('#form1_19');$('#form1_cgpa').attr('required','1')}
		}
		});
	$(document).on('change','#form1_recommended',function(){ 
			if($('#form1_recommended').val()=='Not Recommended')
			{hide_input('#form1_24');$('#form1_signhod').removeAttr('required');}
			else
			{show_input('#form1_24');$('#form1_signhod').attr('required','1');}
		 });
	$(document).on('input','#form1_relevance_text',function(){ 
			if($('#form1_relevance_text').val()!='')
			{hide_input('#form1_relevance');$('#form1_relevance').removeAttr('required');}
			else
			{show_input('#form1_relevance');$('#form1_relevance').attr('required','1');}
		 });
	$(document).on('input','#form1_relevance',function(){ 
			if($('#form1_relevance').val()!='')
			{hide_input('#form1_relevance_text');$('#form1_relevance_text').removeAttr('required');}
			else
			{show_input('#form1_relevance_text');$('#form1_relevance_text').attr('required','1');}
		 });
	$(document).on('input','#form1_objective_text',function(){ 
			if($('#form1_objective_text').val()!='')
			{hide_input('#form1_objective');$('#form1_objective').removeAttr('required');}
			else
			{show_input('#form1_objective');$('#form1_objective').attr('required','1');}
		 });
	$(document).on('input','#form1_objective',function(){ 
			if($('#form1_objective').val()!='')
			{hide_input('#form1_objective_text');$('#form1_objective_text').removeAttr('required');}
			else
			{show_input('#form1_objective_text');$('#form1_objective_text').attr('required','1');}
		 });
	$(document).on('input','#form1_cost_details_text',function(){ 
			if($('#form1_cost_details_text').val()!='')
			{hide_input('#form1_cost_details');$('#form1_cost_details').removeAttr('required');}
			else
			{show_input('#form1_cost_details');$('#form1_cost_details').attr('required','1');}
		 });
	$(document).on('input','#form1_cost_details',function(){ 
			if($('#form1_cost_details').val()!='')
			{hide_input('#form1_cost_details_text');$('#form1_cost_details_text').removeAttr('required');}
			else
			{show_input('#form1_cost_details_text');$('#form1_cost_details_text').attr('required','1');}
		 });
	$(document).on('change','#form1_research',function(){ 
			if($('#form1_research').val()=='No')
			{hide_input('#form1_16');$('#form1_title').removeAttr('required');
			hide_input('#form1_17');$('#form1_accepted_paper').removeAttr('required');}
			else
			{show_input('#form1_16');$('#form1_title').attr('required');
			show_input('#form1_17');$('#form1_accepted_paper').attr('required','1');}
		 });
	$(document).on('change','#form1_')
	//Forms
		$(document).on('click','.login_button',function(){ dologin(); });
		$(document).on('submit','#form1',function(){ form1_submit(); });
	//Admin panel buttons
		$(document).on('click','#show_add_dept_button',function(){ showAddDept(); });
  
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
	else if(window.location.href.indexOf('/admin')>0)
		{
			if(hash == '')
				showDash();
			else if(hash == 'dept')
				showDept();
			else if(hash == 'formC')
				showFormC();
			else if(hash == 'users')
				showUsers();
			else if(hash == 'userP')
				showUserP();
		}
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
	var form=$('#form1')[0];
	var formdata=new FormData(form);
	if(validate_name(formdata.get('name'))){
		if(validate_number(formdata.get('roll'),8)){
		$("#submitForm").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "form1.php?submit_form",
            data: formdata,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
				$('#container').html(data);
				$("#btnSubmit").prop("disabled", false);

            },
            error: function (e) {

                form_error('Error submitting form please try again.','#submitForm')
                console.log("ERROR : ", e);
                $("#btnSubmit").prop("disabled", false);

            }
		});
		}
		else{
			form_error('Roll no. format incorrect.','#form1_roll')
		}
	}
	else
		{
			form_error('Name cannot contain letters or symbols.','#form1_name');
		}
}
function logout(){
	$.get('../login.php?logout',function(data){
		if (data==1)
			window.location.href="../";
		$(window).bind('hashchange', function ()
		{
			hash();
		});
	})
}
function linkChange(id){
	var ids=['#users_dash','#user_profile','#departments','#manage_users','#form_control'];
	$.each(ids,function(index,value){
		if(id==value){
			$(value).addClass('active');
		}
		else
			$(value).removeClass('active');
	});
}
function validate_name(name){
	var regex = new RegExp("/^[a-zA-Z\s]+$/");
	if(regex.test(name))
		return 1;
	else
		return 0;
	
}
function validate_number(number,len){
	var regex =new RegExp(/^[0-9-+]+$/);
	if(regex.test(number)&& number.length==len)
		return 1;
	else
		return 0;
	
}
function form_error(text,input){
	$('#error_span').html(text);
	input_focus(input);
}
function showAddDept(){
	$('#modal_content').loadingView({'state':true})
	$.get('pages/dash.php?show_add_dept',function(data){
		$('#modal_content').html();
		$('#modal_content').loadingView({'state':false});
	})
}