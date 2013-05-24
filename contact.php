<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Build The Dot.</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
    <link rel="stylesheet" href="stylesheets/style_menu.css">

	<script src="js/jquery.js"></script>
	<!--Validate-->
 <script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $("#form1").validate({
        rules: {
          name: "required",// simple rule, converted to {required:true}
          email: {// compound rule
          required: true,
          email: true
        },
        phone: {
          required: true
        },
        comment: {
          required: true
        }
        },
        messages: {
		  name:"กรุณาระบุชื่อผู้ติดต่อ",
		  email: "กรุณาระบุอีเมลล์",
		  phone: "กระณาระบุหมายเลขโทรศัพท์",
          comment: "กรุณาระบุข้อความ"
		  
        }
      });
    });
  </script>
	<!--media queries -->
	<!-- <link rel="stylesheet" media="screen and (max-width: 600px)" href="stylesheets/iphone.css" /> 
	<link rel="stylesheet" media="screen and (min-width: 600px)" href="stylesheets/style.css" />-->
	<!-- <link rel="stylesheet" media="print" href="print.css" /> -->
	

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/iconWeb.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('#nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
        <div class="three columns">
            <div id="wrap-logo" class="center"><a href="index.html" alt="Bulid The Dot" class="logo"><img src="images/logo.png" onmouseover="this.src='images/logoNew1.png'" onmouseout="this.src='images/logo.png'" /></a></div>
		</div>
		<ul class="left" id="menu-rwd">
					<li><a href="index.html">Home</a></li>
					<li><a href="works.html">Works</a></li>
					<li><a href="contact.html">Contact</a></li>
		</ul>
        <div id="nav" class="thirteen columns">
            <ul id="menu-normal">
                <li><a href="index.html">Home</a></li>
                <li><a href="works.html">Works</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <hr />
               <ul class="left" id="menu">
					<li class="contact-btn"><span class="yellow-title">Call us </span><a href="tel:+66877839922" class="contact-title">08 7783 9922</a></li><br>
					<li class="contact-btn"><span class="yellow-title">E-mail </span><a href="#contact.html" class="contact-title"> buildthedot@gmail.com</a></li> 			
			   </ul>
			   
		</div>
		
		<div class="three columns margin-top">
		
        </div><!-- introduce -->
		<div id="" class="seven columns margin-top right">
			<div>
				<p><span class="heading-big">ข้อมูลการติดต่อ</span></p>
				<form id="form1" method="post" action="send_email.php">
      <div class="form-row"><span class="label">ชื่อผู้ติดต่อ <em class="red-label">*</em></span><input type="text" name="name" /></div>
      <div class="form-row"><span class="label">อีเมลล์ <em class="red-label">*</em></span><input type="text" name="email" /></div>
      <div class="form-row"><span class="label">หมายเลขโทรศัพท์ <em class="red-label">*</em></span><input type="text" name="phone" /></div>
      <div class="form-row"><span class="label">ข้อความ <em class="red-label">*</em></span><textarea name="comment" ></textarea></div>
      <div class="form-row"><input class="submit" type="submit" value="ส่งข้อความ"></div>
    </form>
			
			</div>
        </div><!-- introduce -->
		
		<div id="contact-box1" class="five columns margin-top right">
			<div class="contact-style">
				<p><span class="heading-big">ติดต่อทีมงาน</span></p>
				<div class="bottom-line">
					<p class="title">โทรศัพท์</p>
                    <a href="tel:+66877839922"><p>087 783 9922</p></a>
                    <a href="tel:+66830681807"><p>083 068 1807</p></a>
					
				</div>
				<div class="bottom-line">
					<p class="title">อีเมลล์</p> 
					<p>buildthedot@gmail.com </p>
				</div>
				
				<div class="metro three-d"><a href="http://www.facebook.com/BuildTheDot">FaceBook</a></div>
			
			</div>
		</div><!-- introduce -->
		
		<div class="three columns margin-top">
			
        </div><!-- introduce -->
       
	</div><!-- container -->

    <div id="footer">
        <div class= "inner">
            <div id="footer-a" class="left eight columns">
                <span>&copy; 2012 Build The Dot All Rights Reserved.</span>
            </div>
            <div id="footer-b" class="right eight columns">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>|</li>
                    <li><a href="works.html">Works</a></li>
                    <li>|</li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>





<!-- End Document
================================================== -->
</body>
</html>