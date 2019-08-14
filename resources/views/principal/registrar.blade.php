@extends('welcome')
@section('contenido')
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EducationPress</title>
                <!-- favicon -->
                <link rel="shortcut icon" href="http://www.demos.themecycle.com/educationpress/wp-content/uploads/2016/03/favicon.png"/>
                		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.6.14"}};
			!function(a,b,c){function d(a){var c,d,e,f,g,h=b.createElement("canvas"),i=h.getContext&&h.getContext("2d"),j=String.fromCharCode;if(!i||!i.fillText)return!1;switch(i.textBaseline="top",i.font="600 32px Arial",a){case"flag":return i.fillText(j(55356,56806,55356,56826),0,0),!(h.toDataURL().length<3e3)&&(i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,65039,8205,55356,57096),0,0),c=h.toDataURL(),i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,55356,57096),0,0),d=h.toDataURL(),c!==d);case"diversity":return i.fillText(j(55356,57221),0,0),e=i.getImageData(16,16,1,1).data,f=e[0]+","+e[1]+","+e[2]+","+e[3],i.fillText(j(55356,57221,55356,57343),0,0),e=i.getImageData(16,16,1,1).data,g=e[0]+","+e[1]+","+e[2]+","+e[3],f!==g;case"simple":return i.fillText(j(55357,56835),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode8":return i.fillText(j(55356,57135),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode9":return i.fillText(j(55358,56631),0,0),0!==i.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity","unicode9"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='educationpress-globalcss-css'  href='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/css/global.css?ver=1.4.1' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var cp_vars = {"admin_ajax_url":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-admin\/admin-ajax.php","message_all_fields_are_required":"All fields are required.","message_username_minimum_length":"Username must be at least 4 characters in length","message_username_exists":"Username already exists or invalid. Please choose another one.","message_email_exists":"E-mail already exists or invalid. Please choose another one.","message_emails_dont_match":"E-mails mismatch.","message_passwords_dont_match":"Passwords mismatch.","message_password_minimum_length":"Password must be at least 6 characters in length.","minimum_password_lenght":"6","message_login_error":"Username and\/or password is not valid.","message_passcode_invalid":"Passcode is not valid.","message_tos_invalid":"You must agree to the Terms of Service in order to signup.","debug":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/coursepress/js/front-enrollment-process.js?ver=1.3.4.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var front_vars = {"withdraw_alert":"Please confirm that you want to withdraw from the course. If you withdraw, you will no longer be able to see your records for this course.","units_archive_url":"units\/"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var mp_cart_i18n = {"ajaxurl":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-admin\/admin-ajax.php","ajax_loader":"<span class=\"mp_ajax_loader\"><img src=\"http:\/\/www.demos.themecycle.com\/educationpress\/wp-content\/plugins\/marketpress\/ui\/images\/ajax-loader.gif\" alt=\"\"> Adding...<\/span>","cart_updated_error_limit":"Cart update notice: this item has a limit per order or you have reached the stock limit.","is_cart_page":""};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var mp_i18n = {"ajaxurl":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-admin\/admin-ajax.php","loadingImage":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-content\/plugins\/marketpress\/ui\/images\/loading.gif","productsURL":"http:\/\/www.demos.themecycle.com\/educationpress\/store\/products\/","productCats":[]};
/* ]]> */
</script>
<script type='text/javascript'>
jQuery( document ).ready(function() { jQuery('#tab_list').tabCollapse(); })
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var educationpress_vars = {"appTaxTag":"course_category","ajaxurl":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-admin\/admin-ajax.php","ajax_url":"\/educationpress\/wp-admin\/admin-ajax.php","nonce":"2a08a9380a","loadgif":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-content\/themes\/EducationPress\/images\/heart-load.gif","already_unliked_message":"You have already deleted this course from wishlist.","unliked_message":"Deleted","error_message":"Sorry, there was a problem processing your request."};
/* ]]> */
</script>
<!--[if lt IE 9]>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/js/html5shiv.min.js?ver=3.7.2'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/js/respond.min.js?ver=3.7.2'></script>
<![endif]-->
<script type='text/javascript'>
new WOW().init();
</script>

				<meta name="generator" content="CoursePress Pro 1.3.4.3"/>
						<script type="text/javascript">
			    var moreText = "Read More";
			    var lessText = "Show Less";
			    var excerptLength = 150;
			</script>
		<style type='text/css' id='educationpress-dynamic-css'>

.breadcrumb-section{
background:#e4e8ee;;
}

.breadcrumb-section h1{
color:#262c38;
}

</style>		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<style type="text/css" title="dynamic-css" class="options-output">h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{color:#262c38;}body{color:#657184;}blockquote,blockquote p{color:#657184;}a,p a{color:#263238;}a:hover,p a:hover{color:#ff5722;}a:active,p a:active{color:#263238;}.course .meta a, .course a, h2 a, h4 a, a.more, .entry-meta a, #secondary .widget a{color:#263238;}.course .meta a:hover, .course a:hover, h2 a:hover, h4 a:hover, a.more:hover, .entry-meta a:hover, #secondary .widget a:hover{color:#ff5722;}.course .meta a:active, .course a:active, h2 a:active, h4 a:active, a.more:active, .entry-meta a:active, #secondary .widget a:active{color:#263238;}.btn-orange, a.btn-orange, .btn-orange:active, .btn-orange:focus,
								.btn-blue, button, input[type="button"], input[type="submit"],
								.woocommerce button.button, .woocommerce input.button,
								.footer-widget .wpcf7-form .wpcf7-submit,
								.navbar li.pull-right a.woo-menu-cart span, #wp-submit{background-color:#ff5722;}.btn-orange:hover,a.btn-orange:hover, .btn-blue:hover, .manage-course:hover, button:hover, input[type="button"]:hover, input[type="submit"]:hover,.woocommerce button.button:hover, .woocommerce input.button:hover, .footer-widget .wpcf7-form .wpcf7-submit:hover, #wp-submit:hover{background-color:#0583e4;}.pagination a.page-numbers{color:#99a6bb;}.pagination a.page-numbers{border-top:1px solid #e4e8ee;border-bottom:1px solid #e4e8ee;border-left:1px solid #e4e8ee;border-right:1px solid #e4e8ee;}.pagination a:hover.page-numbers{color:#ffffff;}.pagination a:hover.page-numbers, .pagination span.current{border-top:1px solid #ff5722;border-bottom:1px solid #ff5722;border-left:1px solid #ff5722;border-right:1px solid #ff5722;}.pagination a:hover.page-numbers, .pagination span.current{background-color:#ff5722;}.site-footer{background-color:#262c38;}.site-footer h1,.site-footer h2,.site-footer h3,.site-footer h4,.site-footer h5,.site-footer h6,.site-footer .h1,.site-footer .h2,.site-footer .h3,.site-footer .h4,.site-footer .h5,.site-footer .h6{color:#ffffff;}.site-footer, .site-footer p, .site-footer ul li{color:#657184;}.site-footer a, .site-footer p a, .site-footer li a{color:#657184;}.site-footer a:hover, .site-footer p a:hover, .site-footer li a:hover{color:#ffffff;}.site-footer a:active, .site-footer p a:active, .site-footer li a:active{color:#657184;}</style></head>

<body class="mp">
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content">
Skip to content</a>



<!-- #site-navigation #start --> 
         <!-- #site-navigation  #end--> 



<div class="page-spacer clearfix"> 
 <div id="primary">
        <div class="container">
        	<div class="row">
               <main id="main" class="site-main col-xs-12 col-sm-8" >
  
  <div class="col-xs-12 col-sm-10 register-form">  	
  <h3>Register</h3>  

														
							<p class="form-info-">All fields are required.</p>

							
							<form id="student-settings" name="student-settings" method="post" class="student-settings">

								
								<input type="hidden" name="course_id" value=" "/>
								<input type="hidden" name="redirect_url" value=""/>

								<label>
									First Name:
									<input type="text" name="first_name" value=""/>
								</label>

								
								<label>
									Last Name:
									<input type="text" name="last_name" value=""/>
								</label>

								
								<label>
									Username:
									<input type="text" name="username" value=""/>
								</label>

								
								<label>
									E-mail:
									<input type="text" name="email" value=""/>
								</label>

								
								<label>
									Password:
									<input type="password" name="password" value=""/>
								</label>

								
								<label class="right">
									Confirm Password:
									<input type="password" name="password_confirmation" value=""/>
								</label>
								<br clear="both"/><br/>

								
								
								<label class="full">
									Already have an account? <a href="http://www.demos.themecycle.com/educationpress/student-login/">Login to your account</a>!								</label>

								<label class="full-right">
									<input type="submit" name="student-settings-submit" class="apply-button-enrolled" value="Create an Account"/>
								</label>

								
								<input type="hidden" id="_wpnonce" name="_wpnonce" value="f717428038" /><input type="hidden" name="_wp_http_referer" value="/educationpress/courses-signup/" />							</form>
							<div class="clearfix" style="clear: both;"></div>

														
</div>	


			 </main><!-- #main -->
             
             
              
<div id="secondary" class="widget-area col-xs-12 col-sm-4" role="complementary">
	<aside id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="http://www.demos.themecycle.com/educationpress/">
    <label>
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="search-field"
            placeholder="Search …"
            value="" name="s"
            title="Search for:" />
                 </label>
    <input type="submit" class="search-submit"
        value="Search" />
</form></aside>		<aside id="recent-posts-2" class="widget widget_recent_entries">		<h3 class="widget-title">Recent Posts</h3>		<ul>
					<li>
				<a href="http://www.demos.themecycle.com/educationpress/the-design-of-html5/">The Design of HTML5</a>
						</li>
					<li>
				<a href="http://www.demos.themecycle.com/educationpress/your-one-stop-solution-for-development-needs/">Your one stop Solution for Development Needs</a>
						</li>
					<li>
				<a href="http://www.demos.themecycle.com/educationpress/audio-tutorial-for-wordpress/">Audio tutorial for WordPress</a>
						</li>
					<li>
				<a href="http://www.demos.themecycle.com/educationpress/tricks-and-tips-for-adobe-photoshopcc-2015/">Tricks and Tips for Adobe Photoshopcc 2015</a>
						</li>
					<li>
				<a href="http://www.demos.themecycle.com/educationpress/solvis-denial/">Post Quote Format</a>
						</li>
				</ul>
		</aside>		<aside id="categories-2" class="widget widget_categories"><h3 class="widget-title">Categories</h3>		<ul>
	<li class="cat-item cat-item-14"><a href="http://www.demos.themecycle.com/educationpress/category/html5-and-css3/" >HTML5 and CSS3</a>
</li>
	<li class="cat-item cat-item-13"><a href="http://www.demos.themecycle.com/educationpress/category/java-script-development/" >Java Script Development</a>
</li>
	<li class="cat-item cat-item-16"><a href="http://www.demos.themecycle.com/educationpress/category/music/" >Music</a>
</li>
	<li class="cat-item cat-item-26"><a href="http://www.demos.themecycle.com/educationpress/category/news/" >News</a>
</li>
	<li class="cat-item cat-item-1"><a href="http://www.demos.themecycle.com/educationpress/category/online-courses/" >Online Courses</a>
</li>
	<li class="cat-item cat-item-15"><a href="http://www.demos.themecycle.com/educationpress/category/web-development/" >Web Development</a>
</li>
		</ul>
</aside><aside id="archives-2" class="widget widget_archive"><h3 class="widget-title">Archives</h3>		<ul>
			<li><a href='http://www.demos.themecycle.com/educationpress/2016/03/'>March 2016</a></li>
		</ul>
		</aside><aside id="recent-comments-2" class="widget widget_recent_comments"><h3 class="widget-title">Recent Comments</h3><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link"><a href='http://themecycle.com' rel='external nofollow' class='url'>Greg Christman</a></span> on <a href="http://www.demos.themecycle.com/educationpress/discussions/test/#comment-114">Test</a></li><li class="recentcomments"><span class="comment-author-link"><a href='http://themecycle.com' rel='external nofollow' class='url'>Greg Christman</a></span> on <a href="http://www.demos.themecycle.com/educationpress/discussions/what-is-the-difference-between-an-object-and-a-function/#comment-55">What is the difference between an object and a function</a></li><li class="recentcomments"><span class="comment-author-link"><a href='http://themecycle.com' rel='external nofollow' class='url'>Greg Christman</a></span> on <a href="http://www.demos.themecycle.com/educationpress/discussions/how-are-you/#comment-54">how are you?</a></li><li class="recentcomments"><span class="comment-author-link">Jasper Buijnsters</span> on <a href="http://www.demos.themecycle.com/educationpress/discussions/what-is-the-difference-between-an-object-and-a-function/#comment-52">What is the difference between an object and a function</a></li><li class="recentcomments"><span class="comment-author-link">Greg Christman</span> on <a href="http://www.demos.themecycle.com/educationpress/simplifying-our-pricing/#comment-50">Simplifying our pricing</a></li></ul></aside></div><!-- #secondary -->
             </div> <!-- row -->
         </div> <!-- container -->
  </div><!-- #primary -->
 </div> <!-- page-spacer #end  --> 	 
</div>
<!-- #content -->


<!-- #colophon -->
</div>
<!-- #page -->

<div class="cp_popup_overall"></div>
<div class="cp_popup_window">
	<div class="cp_popup_window_inner">
		<div class="cp_popup_close_button"></div>
		<div class="cp_popup_loading"></div>
		<div class="cp_popup_content">
			<!--ajax step content goes here-->
		</div>
	</div>
</div><script type="text/javascript">(function() {function addEventListener(element,event,handler) {
	if(element.addEventListener) {
		element.addEventListener(event,handler, false);
	} else if(element.attachEvent){
		element.attachEvent('on'+event,handler);
	}
}function maybePrefixUrlField() {
	if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if( urlFields && urlFields.length > 0 ) {
	for( var j=0; j < urlFields.length; j++ ) {
		addEventListener(urlFields[j],'blur',maybePrefixUrlField);
	}
}/* test if browser supports date fields */
var testInput = document.createElement('input');
testInput.setAttribute('type', 'date');
if( testInput.type !== 'date') {

	/* add placeholder & pattern to all date fields */
	var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
	for(var i=0; i<dateFields.length; i++) {
		if(!dateFields[i].placeholder) {
			dateFields[i].placeholder = 'YYYY-MM-DD';
		}
		if(!dateFields[i].pattern) {
			dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
		}
	}
}

})();
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"sending":"Sending ..."};
/* ]]> */
</script>
<<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<!--[if lte IE 9]>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.0.9'></script>
<![endif]-->
</body></html>
@stop