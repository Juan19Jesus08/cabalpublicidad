<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Cabal Publicidad</title>
	<link rel='dns-prefetch' href='//s.w.org' />

    <link rel='stylesheet' href='/css/load-styles.css?ver=4.6.14' type='text/css' media='all' />    
<link rel='stylesheet' id='educationpress-bootstrap-checkbox-css'  href='/css/build.css?ver=4.6.14' type='text/css' media='all' />
<link rel='stylesheet' id='educationpress-custom-forgot-css'  href='/css/forgot-password.css?ver=4.6.14' type='text/css' media='all' />
<style id='educationpress-custom-forgot-inline-css' type='text/css'>

	  
      
	     
   
        #login h1 a, .login h1 a {
             background: url(images/cabal.jpg) no-repeat center;
			background-size:80% 80%;
			width:auto;
			height:110px;
            
        }
    

</style>
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
	<style type="text/css" title="dynamic-css" class="options-output">h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{color:#262c38;}body{color:#657184;}blockquote,blockquote p{color:#657184;}a,p a{color:#263238;}a:hover,p a:hover{color:#ff5722;}a:active,p a:active{color:#263238;}.course .meta a, .course a, h2 a, h4 a, a.more, .entry-meta a, #secondary .widget a{color:#263238;}.course .meta a:hover, .course a:hover, h2 a:hover, h4 a:hover, a.more:hover, .entry-meta a:hover, #secondary .widget a:hover{color:#ff5722;}.course .meta a:active, .course a:active, h2 a:active, h4 a:active, a.more:active, .entry-meta a:active, #secondary .widget a:active{color:#263238;}.btn-orange, a.btn-orange, .btn-orange:active, .btn-orange:focus,
								.btn-blue, button, input[type="button"], input[type="submit"],
								.woocommerce button.button, .woocommerce input.button,
								.footer-widget .wpcf7-form .wpcf7-submit,
								.navbar li.pull-right a.woo-menu-cart span, #wp-submit{background-color:#ff5722;}.btn-orange:hover,a.btn-orange:hover, .btn-blue:hover, .manage-course:hover, button:hover, input[type="button"]:hover, input[type="submit"]:hover,.woocommerce button.button:hover, .woocommerce input.button:hover, .footer-widget .wpcf7-form .wpcf7-submit:hover, #wp-submit:hover{background-color:#0583e4;}.pagination a.page-numbers{color:#99a6bb;}.pagination a.page-numbers{border-top:1px solid #e4e8ee;border-bottom:1px solid #e4e8ee;border-left:1px solid #e4e8ee;border-right:1px solid #e4e8ee;}.pagination a:hover.page-numbers{color:#ffffff;}.pagination a:hover.page-numbers, .pagination span.current{border-top:1px solid #ff5722;border-bottom:1px solid #ff5722;border-left:1px solid #ff5722;border-right:1px solid #ff5722;}.pagination a:hover.page-numbers, .pagination span.current{background-color:#ff5722;}.site-footer{background-color:#262c38;}.site-footer h1,.site-footer h2,.site-footer h3,.site-footer h4,.site-footer h5,.site-footer h6,.site-footer .h1,.site-footer .h2,.site-footer .h3,.site-footer .h4,.site-footer .h5,.site-footer .h6{color:#ffffff;}.site-footer, .site-footer p, .site-footer ul li{color:#657184;}.site-footer a, .site-footer p a, .site-footer li a{color:#657184;}.site-footer a:hover, .site-footer p a:hover, .site-footer li a:hover{color:#ffffff;}.site-footer a:active, .site-footer p a:active, .site-footer li a:active{color:#657184;}</style>	</head>
	<body class="login login-action-lostpassword wp-core-ui  locale-en-us">
		<div id="login">
		<h1><a href="http://www.demos.themecycle.com/educationpress" title="EducationPress" tabindex="-1">EducationPress</a></h1>
        <?php use Illuminate\Support\Facades\Session; 
             $email= Session::get('email');

             $query = "SELECT * from usuario where usuario.email='$email'";

    $data=DB::select($query);
   
    foreach($data as $item)
    {
       
        $nombre=$item->nombre;
        
        
        //$categoria=$item->cate;
        //$id_cate=$item->id_categoria;
    }
              
             ?>


    {{ Form::open(array('action' => 'UsuarioController@Actualizar_nombre', 'method' => 'post','id'=>'lostpasswordform','name'=>'lostpasswordform')) }}
	<p>
		<label for="user_login" > Nombre de usuario<br />
        {{ Form::text('nombre_show', $nombre) }}
        {{ Form::hidden('email_show', $email) }}
		</label>
	</p>
		
    {!! Form::submit( 'Actualizar nombre de usuario', ['class' => 'button button-primary button-large', 'name' => 'submitbutton', 'value' => 'login'])!!}
    {{ Form::close() }}

<p id="nav">


	<p id="backtoblog"><a href="/">&larr; Mi Perfil</a></p>
	
	</div>

		<script type="text/javascript">
	try{document.getElementById('user_login').focus();}catch(e){}
	if(typeof wpOnload=='function')wpOnload();
	</script>
	
		<div class="clear"></div>
	</body>
	</html>
	