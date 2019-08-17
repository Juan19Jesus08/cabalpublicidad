@extends('welcome')
@section('contenido')
<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Courses Grid 3 Column &#8211; EducationPress</title>
<meta name='robots' content='noindex,follow' />
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
<link rel='stylesheet' id='educationpress-style-css'  href='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/style.css?ver=1.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/css/animate.css?ver=4.6.14' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-css'  href='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/fancybox/css/fancybox.css?ver=4.6.14' type='text/css' media='all' />
<link rel='stylesheet' id='educationpress-parent-custom-css'  href='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/css/custom.css?ver=1.4.1' type='text/css' media='all' />
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var cp_vars = {"admin_ajax_url":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-admin\/admin-ajax.php","message_all_fields_are_required":"All fields are required.","message_username_minimum_length":"Username must be at least 4 characters in length","message_username_exists":"Username already exists or invalid. Please choose another one.","message_email_exists":"E-mail already exists or invalid. Please choose another one.","message_emails_dont_match":"E-mails mismatch.","message_passwords_dont_match":"Passwords mismatch.","message_password_minimum_length":"Password must be at least 6 characters in length.","minimum_password_lenght":"6","message_login_error":"Username and\/or password is not valid.","message_passcode_invalid":"Passcode is not valid.","message_tos_invalid":"You must agree to the Terms of Service in order to signup.","debug":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/coursepress/js/front-enrollment-process.js?ver=1.3.4.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var front_vars = {"withdraw_alert":"Please confirm that you want to withdraw from the course. If you withdraw, you will no longer be able to see your records for this course.","units_archive_url":"http:\/\/www.demos.themecycle.com\/educationpress\/courses-grid-3-column\/units\/"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/coursepress/js/coursepress-front.js?ver=1.3.4.3'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/coursepress/js/coursepress-calendar.js?ver=1.3.4.3'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/coursepress/js/coursepress-front-elements.js?ver=1.3.4.3'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/marketpress/ui/js/ajaxq.min.js?ver=3.1.1'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/marketpress/ui/js/jquery.colorbox-min.js?ver=3.1.1'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/marketpress/ui/js/jquery.validate.min.js?ver=3.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mp_cart_i18n = {"ajaxurl":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-admin\/admin-ajax.php","ajax_loader":"<span class=\"mp_ajax_loader\"><img src=\"http:\/\/www.demos.themecycle.com\/educationpress\/wp-content\/plugins\/marketpress\/ui\/images\/ajax-loader.gif\" alt=\"\"> Adding...<\/span>","cart_updated_error_limit":"Cart update notice: this item has a limit per order or you have reached the stock limit.","is_cart_page":""};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/marketpress/ui/js/mp-cart.js?ver=3.1.1'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-includes/js/jquery/ui/tooltip.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/marketpress/ui/js/hoverintent.min.js?ver=3.1.1'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/marketpress/ui/select2/select2.min.js?ver=3.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mp_i18n = {"ajaxurl":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-admin\/admin-ajax.php","loadingImage":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-content\/plugins\/marketpress\/ui\/images\/loading.gif","productsURL":"http:\/\/www.demos.themecycle.com\/educationpress\/store\/products\/","productCats":[]};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/marketpress/ui/js/frontend.js?ver=3.1.1'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/rich-reviews/js/rich-reviews.min.js?ver=4.6.14'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/js/jquery.mmenu.min.all.js?ver=4.6.14'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/js/bootstrap.min.js?ver=4.6.14'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/js/bootstrap-tabcollapse.js?ver=4.6.14'></script>
<script type='text/javascript'>
jQuery( document ).ready(function() { jQuery('#tab_list').tabCollapse(); })
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var educationpress_vars = {"appTaxTag":"course_category","ajaxurl":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-admin\/admin-ajax.php","ajax_url":"\/educationpress\/wp-admin\/admin-ajax.php","nonce":"2a08a9380a","loadgif":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-content\/themes\/EducationPress\/images\/heart-load.gif","already_unliked_message":"You have already deleted this course from wishlist.","unliked_message":"Deleted","error_message":"Sorry, there was a problem processing your request."};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/js/functions.js?ver=4.6.14'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/js/html5shiv.min.js?ver=3.7.2'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/js/respond.min.js?ver=3.7.2'></script>
<![endif]-->
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/fancybox/js/jquery.fancybox.js?ver=4.6.14'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/assets/fancybox/js/custom.fancybox.js?ver=4.6.14'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/themes/EducationPress/js/wow.min.js?ver=4.6.14'></script>
<script type='text/javascript'>
new WOW().init();
</script>
<link rel='https://api.w.org/' href='http://www.demos.themecycle.com/educationpress/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.demos.themecycle.com/educationpress/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.demos.themecycle.com/educationpress/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.6.14" />
<link rel="canonical" href="http://www.demos.themecycle.com/educationpress/courses-grid-3-column/" />
<link rel='shortlink' href='http://www.demos.themecycle.com/educationpress/?p=861' />
<link rel="alternate" type="application/json+oembed" href="http://www.demos.themecycle.com/educationpress/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.demos.themecycle.com%2Feducationpress%2Fcourses-grid-3-column%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://www.demos.themecycle.com/educationpress/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.demos.themecycle.com%2Feducationpress%2Fcourses-grid-3-column%2F&#038;format=xml" />
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

<body class="page page-id-861 page-template page-template-page-templates page-template-tpl-courses-grid-3-col page-template-page-templates/tpl-courses-grid-3-col-php page-courses-grid-3-column">
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content">
Skip to content</a>



<!-- #site-navigation #start --> 
         <!-- #site-navigation  #end--> 


<div class="page-spacer clearfix">
	<div id="primary" class="content-area">
       <div class="container">
        	<div class="row">

		<main id="main" class="site-main col-xs-12 col-sm-9 three-column"  >
                
                
         <div class="well well-sm row">
         
                <div class="col-xs-12 col-sm-5 sorting">
                	<form name="ads_sort_form" method="get" action="http://www.demos.themecycle.com/educationpress/courses-grid-3-column/" >
<label>Sort by:</label>
    <select name="c_sort" id="c_sort" onchange="submit_sort_form();">
            <option value="popular" >Popularity</option>
                        <option value="ratings" >Ratings</option>
                        <option value="new_first"  selected="selected" >Newest</option>
            <option value="old_first" >Oldest</option>
            <option value="alphabet_az" >Name (A-Z)</option>
            <option value="alphabet_za" >Name (Z-A)</option>
            <option value="plow_high" >Price Low To High</option>
            <option value="phigh_low" >Price High To Low</option>
	</select> 
    
</form>
                </div>
         
            </div>
            
			<div id="products" class="list-group"> 
     		<div class="row"> 
             <?php 
             
            

              
             foreach($videos as $item)
             {
                 
                 echo '<div class="col-xs-12 col-sm-4 zoom courses  with-sidebar three-column grid-group-item">';
                 echo '<div class="course clist">';
                                 
                                  echo'<div class="course-thumbnail course-featured-media course-featured-media-2558 "><figure>';				echo'<iframe width="420" height="200" src="'.$item->url.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                             echo '</figure></div>';                                       
                                                     echo '<div class="course_space">';
                                                      echo '<div class="price"> MXN $'.$item->precio;                                        echo '<span></span></div>';
                                                     echo '<h3><a href="/clases?clase_de='.$item->nombre.'">'.$item->nombre.'</a></h3>';
                                 echo '<p class="meta">';
                                 echo 'by: <h3>Daniel</h3> </p>';
                                  
                                echo '<p class="desc">'.			
                             $item->descripcion.			
                         '</p>';
                                 
                                 
                                echo '</div>';
                                     
                                     echo'<div class="course_rel">';
                                                             echo '<div class="course_rating col-xs-12 col-sm-6">';
                                          
                                                                            echo '<i class="glyphicons glyphicon-star-empty"></i>';
                                                                                 echo'<i class="glyphicons glyphicon-star-empty"></i>';
                                                                                 echo'<i class="glyphicons glyphicon-star-empty"></i>';
                                                                                 echo'<i class="glyphicons glyphicon-star-empty"></i>';
                                                                                 echo'<i class="glyphicons glyphicon-star-empty"></i>';
                                                                         
                                echo ' </div>';
                                                                                    echo ' <p class="enroll col-xs-12 col-sm-6 pull-right"> Cursando '.$item->vendidos.'</p>';
                                                              echo'</div>';
                                 
                                 echo'</div>';  
                             echo'</div>';
             }
             
                         
                         
             
                          ?>
                       
        </div> <!-- row #end -->
     </div>    
        </main>   <!-- main -->

 
<div id="secondary" class="widget-area col-xs-12 col-sm-4 pull-right col-sm-3" role="complementary">
	<aside id="educationpress_course_search_widget-4" class="widget widget_search"><h3 class="widget-title">Search Course</h3> 
                
            <form role="search" method="get" class="search-form search-course" action="http://www.demos.themecycle.com/educationpress/">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" 
                        placeholder="Search Course"
                        value="" name="s"
                        title="Search for:" />
                         <input type="hidden" value="course" name="post_type" id="post_type" />
                </label>
              
               
                <button class="btn btn-orange btn-medium course-submit" type="submit">
                <i class="lnr lnr-magnifier"></i>
                 </button>
            </form>
                
              
			</aside>
 
			 </div> <!-- row -->
         </div> <!-- container -->
  </div><!-- #primary -->
</div><!-- page-spacer -->
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

})();</script><script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.demos.themecycle.com\/educationpress\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.5.1'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/coursepress/js/jquery.knob.js?ver=1.3.4.3'></script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-includes/js/wp-embed.min.js?ver=4.6.14'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js?ver=4.0.9'></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='http://www.demos.themecycle.com/educationpress/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.0.9'></script>
<![endif]-->
</body></html>
@stop