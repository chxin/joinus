<!DOCTYPE HTML>
<html lang="en-US">
	<head>
        <!--=============== Meta and Title  ===============-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HZCTF 学生网络攻防大赛</title>
		<!-- favicon icon -->			
		<link rel="icon" type="image/png" href="favicon.png"> 
        <!--=============== Include all css file  ===============-->	
		<link rel="stylesheet" href="css/animate.css" media="all" />            <!-- Animate css -->
		<link rel="stylesheet" href="css/font-awesome.min.css" media="all" />   <!-- Font awesome css -->
        <link rel="stylesheet" href="css/font-sourch_sun_pro.css"/>             <!-- Font css -->		
        <link rel="stylesheet" href="fonts/comicSans.css"/>             <!-- Font css -->		
        <link rel="stylesheet" href="css/slicknav.css"/>	 					<!-- Slicknav css -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>  					<!-- Bootstrap -->
        <link rel="stylesheet" href="css/owl.carousel.css">	   					<!-- carousel css -->
        <link rel="stylesheet" href="css/owl.theme.css">   						<!-- Owl theme css -->			
		<link rel="stylesheet" href="css/reset.css"/>						 	<!-- Recet css -->
		<link rel="stylesheet" href="switcher/switcher.css"/>					<!-- Switcher css -->				
		<link rel="stylesheet" href="css/style1.css"/>							<!-- Style css -->
		<link rel="stylesheet" href="css/responsive.css" media="all" />			<!-- Responsive css -->
		<link rel="stylesheet" href="css/preloder.css" media="all" />			<!-- Preloder css -->
	<!--[if lt IE 8]><link rel="stylesheet" href="assets/blueprint-css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	</head>
	<body>

		<!-- php sign up -->
		
		
		<div id="main" >  <!--start main div -->
			<div class="home_area"> <!-- Home area-->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo">
								<img src="img/logo.png" alt="" /> <!-- Here is your logo -->
							</div>	
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="home_area_text">
								<h2>华中科技大学学生网络攻防大赛</h2> <!-- Page title -->
								<a href="http://nongchao.auto.hust.edu.cn"><h2 style="color: green">HZCTF</h2></a> <br>
								<h4>即将到来</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							                <!-- countdown -->
							<ul class="countdown wow fadeInUp" data-wow-duration="7s">
								<li>
									<span class="days">00</span>
									<p class="days_ref">day</p>
								</li>

								<li>
									<span class="hours">00</span>
									<p class="hours_ref">hours</p>
								</li>

								<li>
									<span class="minutes">00</span>
									<p class="minutes_ref">minutes</p>
								</li>

								<li>
									<span class="seconds">00</span>
									<p class="seconds_ref">seconds</p>
								</li>
							</ul>
										<!--End countdown -->
						</div>
					</div>
				</div>	
			</div>	
			
			<div style="clear:both;"></div>
				
			<div class="section" id="section4"> <!-- Section4 -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo">
								<img src="img/logo.png" alt="" /> <!-- Here is your logo -->
							</div>		
						</div>
					</div>
				</div>
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="contact_us_text">
									<h2>H&nbsp;&nbsp;Z&nbsp;&nbsp;C&nbsp;&nbsp;T&nbsp;&nbsp;F 报名表</h2>			<!-- Page title -->
									<!-- <h4>报名表</h4>	 -->
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-4 map_area">   <!-- Google Map area -->
								<i class="map_show fa fa-angle-down"></i>
								<i class="map_corse1 fa fa-times"></i>
								<div class="map_hide">
									<h4 class="map_social">赛程安排</h4>   <!-- Google Map -->
									<p>比赛日期：<br>&nbsp;&nbsp;&nbsp;&nbsp;	选拔赛：2017-12-14（周四）</p>

									<p>培训日期：<br>&nbsp;&nbsp;&nbsp;&nbsp;	第一次培训：2017-12-10（周日）</p>
								</div>
							</div>    <!-- // End Google Map area -->
							<div class="col-sm-4">
								<!-- form section -->	
								<div id="form-wrapper">
									<form id="form" method="post" action="<?php echo htmlspecialchars('join.php'); ?>" name="send">
										<input class="email_input requiredField name" id="name" name="name" type="text" placeholder="姓名" >
										<input class="email_input requiredField subject college" id="email" name="college" type="text" placeholder="学号"><br />								
										<input class="email_input requiredField subject" id="email" name="class" type="text" placeholder="学院班级"><br />								
										<input class="email_input requiredField email" id="email" name="email" type="text" placeholder="电子邮箱"><br />
										<input class="email_input requiredField subject phone" id="email" name="phone" type="text" placeholder="联系电话"><br />										
										<textarea class="email_input message" id="message" name="message" rows="3" 	placeholder="介绍自己"></textarea><br />
										<button class="email_submit email_margin_top submit" type="submit" value="Submit" style="font-size: 20px">提交</button>
									</form>
								</div>	
								<!-- end form section -->	
							</div>		
							<div class="col-sm-4 social_hide">     <!-- Phone and Social icon area -->
								<i class="show_social fa fa-angle-down"></i>
								<i class="map_corse2 fa fa-times"></i>
								<div class="hide_social">
									<h4 class="map_social">联系我们</h4>
									<p class="phone_p" >Tel: 159-2768-1243 </p>
									<p class="phone_p" >Mail: nongchao@163.com</p>
									<p class="phone_p" >Site: <a href="http://nongchao.auto.hust.edu.cn" style="color: #FFF">nongchao.auto.hust.edu.cn</a> </p>
									<h4 class="map_social">信息平台</h4>

									<div class="social_icon">
										<ul>
											<li><a class=""  href="./img/qqScan.png"><i class="twitter small_icon  fa fa-twitter"></i></a></li>
											
											<li><a class=""  href="http://nongchao.auto.hust.edu.cn"><i class="link small_icon  fa fa-link"></i></a></li>
										</ul>
									</div>
								</div>
							</div>   <!-- //End Phone and Social icon area -->
						</div>
					</div>
				</div>
			</div>  <!-- //End Section4 -->
			
			<div style="clear:both;"></div>		
			<div class="container navbar">   <!-- Under button -->
				<div class="row">
					<div class="col-sm-12 ">
						<div class="button_area" id="sticker"> <!-- sticker menu for mobile layout -->
							<ul id="nav">
								<li id="scrollbar" >
<!-- 									<h3 class="btn_menu home btn  btn-lg"> 主页</h3>
 -->									<h3 class="btn_menu contact_us btn  btn-lg" >报名</h3>
								</li>	
							</ul>	
						</div>
					</div>
				</div>
			</div> <!-- //Under button -->
		</div>  <!-- //End main div  -->
		
<!--
##  javascript All file include
=============================================================================== -->			
		
		<script src="js/jquery-1.9.1.min.js"></script>	              	<!-- Main js file -->
		<script src="js/custom.js"></script>						   	<!-- Custom js file -->	
		<script src="js/form-contact.js"></script>						<!-- form-contact js file -->
		<script src="js/jquery.slicknav.min.js"></script>				<!-- Slicknav js file -->
		<script src="js/bootstrap.min.js"></script>						<!-- Bootstrap js file -->
		<script src="js/owl.carousel.min.js"></script>					<!-- Carousel js file -->
		<script src="js/canvas.js"></script>     						<!-- canvas js file -->  	
		<script src="js/jquery.ajaxchimp.min.js"></script>				<!-- Ajaxchimp js file -->
		<script src="switcher/switcher.js"></script>					<!-- Switcher js file -->
		

	</body>
</html>