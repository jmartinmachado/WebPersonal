<?
  session_start();                  // create session number
  $cid=$_COOKIE["PHPSESSID"];
  if(file_exists("config.php")) { include_once("config.php"); }	
  if(empty($cid)) {  echo "<meta http-equiv='refresh' CONTENT='0; URL=$home'>"; } // restart page if no cid 

  //  echo "Cid $cid";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>THIS&trade; Brand Clothing Company -Los Angeles, California</title>
	<meta name="description" content="THIS brand clothing company -los angeles, california">
	<meta name="keywords" content="THIS brand clothing company, los angeles, this brand clothing, this(tm), thistm,this, egomaniacs">
	<meta name="robots" content="INDEX,FOLLOW" />
		
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<?php
	if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
	?>
		<link rel="stylesheet" type="text/css" href="http://thisbrandclothing.com/css/application-skin3.css" media="screen">
	<?php
	}elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE){
	?>
		<link rel="stylesheet" type="text/css" href="http://thisbrandclothing.com/css/application-skin1.css" media="screen">
	<?php
	}
?>
	   
	<link rel="stylesheet" type="text/css" href="temp/superfish1.css" media="screen">
	<link href="css/topproducts.css" rel="stylesheet"  type="text/css" media="screen" />  
		
	<script src="http://www.thisbrandclothing.com/js/jquery.tools.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://thisbrandclothing.com/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://thisbrandclothing.com/js/jquery.carousel.min.js"></script>

	<script type="text/javascript" src="js/superfish.js"></script>		
	<script src="js/jquery.bgpos.js" type="text/javascript"></script>
	<script src="js/topproducts.js" type="text/javascript"></script>

	<script type="text/javascript">
		

	$(function(){	
		$('#global_header ul#navi li#button_01_global_nav, #global_header ul#navi li#button_02_global_nav, #global_header ul#navi li#button_03_global_nav, #global_header ul#navi li#button_04_global_nav, #global_header ul#navi li#button_05_global_nav')
		.css( {backgroundPosition: "0 -40px"} )
		.mouseover(function(){		
			$(this).stop().animate({backgroundPosition:"(0 0)"}, {duration:500});
			
		})
		.mouseout(function(){
		$(this).stop().animate({backgroundPosition:"(0 -40px)"}, {duration:300, complete:function(){
		$(this).css({backgroundPosition: "0 -40px"})
		}})
		})
		});

	 	$("#global_header ul#navi li").hover(function(){
		    
	        $(this).addClass("hover");
	        $('ul:first',this).css('visibility', 'visible');
	    
	    }, function(){
	    
	        $(this).removeClass("hover");
	        $('ul:first',this).css('visibility', 'hidden');
	    
	    });
	    
	    
	   $("#global_header ul#navi li ul li:has(ul)").find("a:first").append(" &raquo; ");
	
		jQuery(document).ready(function() {		
			jQuery('ul.sf-menu').superfish();
			
			$("#navi ul li div:last").remove();

			$('input[type="text"], input[type="email"], input[type="number"], input[type="password"], textarea[name="Message"]').addClass("idleField");
			$('input[type="text"], input[type="email"], input[type="number"], input[type="password"], textarea[name="Message"]').focus(function() {
				$(this).removeClass("idleField").addClass("focusField");
				if (this.value == this.defaultValue){
					this.value = '';
				}
				if(this.value != this.defaultValue){
					this.select();
				}
			});
			$('input[type="text"], input[type="email"], input[type="number"], input[type="password"], textarea[name="Message"]').blur(function() {
				$(this).removeClass("focusField").addClass("idleField");
				if ($.trim(this.value) == ''){
					this.value = (this.defaultValue ? this.defaultValue : '');
				}
			});
			
			if (jQuery('#carousel').length) {					
					jQuery(function(){
							jQuery("#carousel").carousel({
							loop:true,
							autoSlide:1,
							delayAutoSlide:5000,
							autoSlideInterval:5000,
							animSpeed:1000,
							slideEasing:'easeInOutBack',
							pagination:1				});
					});
				}
			var pos = $("#logo").position();
			$("#navi").css({
				position: 'absolute',
				left: pos.left + 320,
				top: pos.top
			});
				
			$('input.carousel-control previous carousel-previous').css({position:'absolute', top:pos.top + 150});
		
		});
		
	</script>
	<!--End  Init Some scripts --><!--[if lt IE 7]>
	<script type="text/javascript">
	//<![CDATA[
		var BLANK_URL = 'http://thisbrandclothing.com/js/blank.html';
		var BLANK_IMG = 'http://thisbrandclothing.com/js/spacer.gif';
	//]]>
	</script>
	<![endif]-->
</head>

<body>

<center>
<div id="wrap">
	<!-- Begin Panel -->
	<div id="toppanel">
		<div id="topline">
			<div>
			</div>
		</div>
		<div id="panel">
			<div class="panel_gradient_bg">
				<div class="content">
					<div class="one-third first_column">
						<h4>Welcome to Web-Kreation</h4>
						<p>Sliding login panel Demo with jQuery</p>
						<p>You can put anything you want in this sliding panel: 
						videos, audio, images, forms... The only limit is your imagination!</p>
						<p></p>
						<p>To download this script go to
						<a href="http://web-kreation.com/index.php/tutorials/nice-clean-sliding-login-panel-built-with-jquery">
						official site ?/a></p>
					</div>
					<div class="one-third margin">
						<h4>Member Login</h4>
						<form class="panel_form" action="#" method="post">
							<input type="text" onfocus="this.select()" value="Username" name="Username" />
							<input class="password" type="password" onfocus="this.select()" value="Password" name="Password" />
							<div>
								<input class="checkbox" type="checkbox" checked="checked" />
								<span>Remember me</span> </div>
							<div class="panel_form_button">
								<button style="margin-right: 10px;" type="submit">
								Login</button><a href="#">Lost your password?</a>
								<div style="clear: both;">
								</div>
							</div>
						</form>
					</div>
					<div class="one-third margin">
						<h4>Not a member yet? Sign Up!</h4>
						<form class="panel_form" action="#" method="post">
							<input type="text" onfocus="this.select()" value="Username" name="Username" />
							<input style="margin: 14px 0;" type="text" onfocus="this.select()" value="Email" name="Email" />
							<p>A password will be e-mailed to you.</p>
							<div class="panel_form_button">
								<button type="submit">Register</button></div>
						</form>
					</div>
					<div style="clear: both;">
					</div>
				</div>
			</div>
		</div>
		<!-- /login -->
		<!-- The tab on top -->
		<div class="tab">
			<ul class="login">
				<li class="left">&nbsp;</li>
				<li id="toggle"><a id="open" class="open text_replace" href="#">
				Login</a>
				<a id="close" style="display: none;" class="close text_replace" href="#">
				Close</a> </li>
				<li class="right">&nbsp;</li>
			</ul>
		</div>
		<!-- / top --></div>
	<!-- End Panel -->
	<div id="global_header">
		<?
			 include_once("menu7.php"); 
		?>
		
	</div>
	<!-- End Header Area -->
	<!-- Begin Carousel Area -->
	<?  if(!$p == 1) {   ?>
	<div class="row-slider ">
		<div class="bg-row-slider">
			<div class="page">
				<div id="carousel">
				
					<?  include_once("carousel.txt"); ?> 
			
				</div>
			</div>
		</div>
	</div>
	
	<?	} ?>
	<!-- End Carousel Area -->
	<!-- Start Details Area -->
			<?
   if($p == 1) { 
	include_once("sell1.php"); 
   }  elseif($p == 2) {
	echo "<div id='details'>";
	  include_once("details.php"); 
	echo "</div>";
   } elseif($p == 3) {
	   include_once("cartitems.php"); 
   } elseif($p == 4) {
	   include_once("addressForm.php"); 
   } elseif($q) {
	   $cats=getCategory($q);
     showCategoryResultItems($table,$c,$cats,'new',$website);
   }
 ?> 
	<!-- End Details Area -->
	<!-- Begin Main Container Area -->
	<? include_once("subfooter.php"); ?>
	<!-- End Main Container Area -->
	<div class="shadow_bg">
	</div>
	<!-- Begin Footer Area -->
	<div id="footer_wrap">
		<div class="footer_gradient_bg">
		</div>
		<div class="center">
			<div id="footer_content">
				<div class="footer_container_01">
					<div class="one-fourth first_column">
						<h4 class="sifr_underline_fix_01">WORK WITH US?</h4>
						<p>Lorem ipsum dolor sit amet, consec tempor incididunt 
						ut labore et dolore. </p>
						<p>Sed do eiusmod tempor incididunt ut labore et dolore 
						magna aliqua. Ut enim ad minim veniam, quis nostru exercitation 
						ullamco <a href="#">laboris nisi sed aliquip</a> ex ea commodo 
						consequat. </p>
					</div>
					<div id="form_column">
						<h4>SAY HELLO &amp; NEWSLETTER</h4>
						<div id="errors">
							<h5>Please fix these first</h5>
						</div>
						<form action="footer_sendmail.php" method="post" id="footer_form">
							<input style="margin-right: 20px;" type="text" onfocus="this.select()" value="Your Name" id="name" name="Your Name" pattern="[a-zA-Z ]{5,}" />
							<input type="email" onfocus="this.select()" value="Email" name="Email" id="email" required="required" />
							<textarea rows="4" cols="64" onfocus="this.select()" name="Message" id="message" required="required">Leave your message here (optional)</textarea>
							<div style="clear: both;">
							</div>
							<div>
								<input class="checkbox" type="checkbox" id="checkbox" checked="checked" value="subscribe" />
								<span>Yes! Sign me up for emails with Newsletter</span>
							</div>
							<div class="hide">
								<!-- This is hidden for normal users --><label>Do 
								not fill out this field</label>
								<input name="spam_check" type="text" value />
							</div>
							<div class="footer_form_button">
								<button style="margin-right: 10px;" name="submit" type="submit">
								SEND A MAIL</button><button type="reset">RESET
								</button>
								<div id="response">
								</div>
								<div style="clear: both;">
								</div>
							</div>
						</form>
					</div>
					<div class="footer_column last_column">
						<h4 class="sifr_underline_fix_02">OUR STORY</h4>
						<p>Lorem ipsum dolor sit eaque consectetur adipisicing elit 
						ut sed do eiusmod tempor incid idunt ut labore et. </p>
						<p>Sed ut perspiciatis omnis si iste natus error voluptatem.
						</p>
						<div class="facebook_icon">
							<a href="#">Columbia on Facebook</a></div>
						<div class="twitter_icon">
							<a href="#">Follow us on Twitter</a></div>
					</div>
				</div>
				<div style="clear: both;">
				</div>
				<div class="separate_line">
				</div>
				<center>
				<div class="footer_container_02">
					<div class="one-fourth first_column">
						<h4 class="sifr_underline_fix_03">CONTACT US</h4>
						<p>Some Street 214-115<br />
						BOX 1234 Tallinn Estonia<br />
						</p>
						<p>(123)456-7890 phone<br />
						(123)456-7890 fax<br />
						<a href="#">columbia@email.co.uk</a><br />
						</p>
					</div>
					<div class="footer_column">
						<h4 class="sifr_underline_fix_04">OUR WORK</h4>
						<ul>
							<li><a href="#">Latest Work ?/a></li>
							<li><a href="#">All Works ?/a></li>
							<li><a href="#">Case Corporation ?/a></li>
							<li><a href="#">Random ?/a></li>
						</ul>
						<ul>
							<li><a href="#">Indenity ?/a></li>
							<li><a href="#">Design ?/a></li>
							<li><a href="#">Web ?/a></li>
						</ul>
					</div>
					<div class="footer_column">
						<h4 class="sifr_underline_fix_05">ABOUT US</h4>
						<ul>
							<li><a href="#">Our Corporation ?/a></li>
							<li><a href="#">Selected Clients ?/a></li>
							<li><a href="#">Services ?/a></li>
							<li><a href="#">The Corporation ?/a></li>
						</ul>
					</div>
					<div class="footer_column">
						<h4 class="sifr_underline_fix_06">WHAT&#39;S NEW</h4>
						<ul class="list_style_02">
							<li><a href="#">Lorem ipsum dolor amet consectetur elit 
							?/a></li>
							<li><a href="#">Sed do eiusmod tempor incididunt ut 
							labore ?/a></li>
							<li><a href="#">Ut enim ad minim quis nostrud ullamco 
							?/a></li>
						</ul>
					</div>
					<div class="footer_column last_column">
						<h4 class="sifr_underline_fix_07">MORE...</h4>
						<ul>
							<li><a href="#">Say Hello ?/a></li>
						</ul>
						<ul>
							<li><a href="#">Coluambia on LinkedIn ?/a></li>
							<li><a href="#">Coluambia on Facebook ?/a></li>
							<li><a href="#">Coluambia on Twitter ?/a></li>
						</ul>
						<p>Designed by <a href="http://pavelbuiko.co.uk/">Pavel 
						Buiko</a> available for purchace on <a href="#">TF</a>
						</p>
					</div>
				</div>
				</center></div>
		</div>
		<div style="clear: both;">
		</div>
	</div>
	<!-- End Footer Area --></div>
</center>

</body>

</html>
