<?php include"admin/php_action/db_connect.php"; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Stock</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lookz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
</head>
<body>
<div class="wrap">	
   <div class="container">
        <div class="header_top">
		  <div class="col-sm-9 h_menu4">
				<ul class="megamenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php">Home</a></li>	
				      <li><a class="color1" href="#">Menu 1</a><div class="megapanel">
						<div class="row">
							<?php
							$sql = "SELECT brand_name FROM brands WHERE brand_status = 1 LIMIT 5";
							$result = $connect->query($sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
							echo '
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="#">'.$row["brand_name"].'</a></li>
									</ul>
								</div>';
								}
							}
							?>								
							</div>
					</li>
					<li><a class="color1" href="#">Menu 2</a><div class="megapanel">
						<div class="row">
							<?php
							$sql = "SELECT brand_name FROM brands WHERE brand_status = 1 LIMIT 5";
							$result = $connect->query($sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
							echo '
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="#">'.$row["brand_name"].'</a></li>
									</ul>
								</div>';
								}
							}
							?>								
							</div>
					</li>
				<li><a class="color4" href="404.html">Accessories</a></li>				
				<li><a class="color6" href="contact.html">Contact</a></li>
			  </ul> 
			</div>
			<div class="col-sm-3 header-top-right">
			     <div class="drop_buttons">
   				    <select class="drop-down drop-down-in">
						<option value="1">English</option>
						<option value="2">Portuguese</option>
						<option value="3">Spanish</option>
					</select>
   			       <div class="clearfix"></div>
   			    </div>
   			    <div class="register-info">
				    <ul>
						<li><a href="login.php">Login</a></li>
					</ul>
			    </div>
				<div class="clearfix"> </div>
   			 </div>
   			 <div class="clearfix"> </div>
	</div>
    <div class="header_bootm">
		<div class="col-sm-4 span_1">
		  <div class="logo">
			<a href="index.html"><img src="admin/assests/images/logo-dark.png" alt="Stock"/></a>
		  </div>
		</div>
		<div class="col-sm-8 row_2">
		  <div class="header_bottom_right">
			<div class="search">
			  <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
			  <input type="submit" value="">
	  		</div>
	  		<ul class="bag">
	  			<a href="cart.html"><i class="bag_left"> </i></a>
	  			<a href="cart.html"><li class="bag_right"><p>205.00 $</p> </li></a>
	  			<div class="clearfix"> </div>
	  		</ul>
	  		<div class="clearfix"> </div>
		   </div>
		</div>
		 <div class="clearfix"></div>
	</div>
	<!--<div class="grid_1">
		<div class="col-md-3 banner_left">
			<img src="images/pic1.png" class="img-responsive" alt=""/>
			<div class="banner_desc">
				<h1>Slim Fit Men </h1>
				<h2>Roundcheck T-Shirt</h2>
				<h5>$125
					   <small>Only</small>
					</h5>
			    <a href="#" class="btn1 btn4 btn-1 btn1-1b">Add To Cart</a>
			</div>
		</div>
		<div class="col-md-9 banner_right">
					<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img src="images/banner.jpg" alt=""/>
						</li>
						<li>
							<img src="images/banner1.jpg" alt=""/>
						</li>
					</ul>
				</div>
		</div>
		<div class="clearfix"></div>
	</div>-->
<div class="content">
<!---728x90--->
  <div class="content_box">
	<ul class="grid_2">
		<a href="single.html"><li><img src="images/pic2.png" class="img-responsive" alt=""/>
			<span class="btn5">$120</span>
			<p>Bikroy Tshirt - Roundneck</p>
		</li></a>
		<a href="single.html"><li><img src="images/pic3.png" class="img-responsive" alt=""/>
			<span class="btn5">$340</span>
			<p>Park Tshirt - Partygrandd</p>
		</li></a>
		<a href="single.html"><li><img src="images/pic4.png" class="img-responsive" alt=""/>
			<span class="btn5">$250</span>
			<p>Gray Tshirt Roundneckdd</p>
		</li></a>
		<a href="single.html"><li><img src="images/pic5.png" class="img-responsive" alt=""/>
			<span class="btn5">$378</span>
			<p>Marivo Tshirt - Roundneck</p>
		</li></a>
		<a href="single.html"><li class="last1"><img src="images/pic6.png" class="img-responsive" alt=""/>
			<span class="btn5">$428</span>
			<p>Strict TshirtSoft, Pure Cotton</p>
		</li></a>
		<div class="clearfix"> </div>
	</ul>
	<!---728x90--->
	<div class="grid_3">
		<div class="col-md-6 box_2">
			<div class="section_group"> 
		      	<div class="col_1_of_2 span_1_of_2">
		      		<img src="images/pic7.jpg" class="img-responsive" alt=""/>
		        </div>
                <div class="col_1_of_2 span_1_of_2">
		      		<img src="images/pic8.jpg" class="img-responsive" alt=""/>
		        </div>
                <div class="clearfix"> </div>
            </div>
		</div>
		<div class="col-md-6">
			<div class="box_3">
			  <div class="col_1_of_2 span_1_of_2 span_3">
		      		<h3>Paul Slim Fit Men
						Roundneck
						T-Shirt</h3>
                  <h4>$156</h4>
                  <p>Offer Available till Sunday 12 Nov 2014.</p>
                  <a href="#" class="btn1 btn6 btn-1 btn1-1b">Add To Cart</a>
		        </div>
                <div class="col_1_of_2 span_1_of_2 span_4">
                   <div class="span_5">
		      		 <img src="images/pic9.png" class="img-responsive" alt=""/>
		      	    </div>
		        </div>
                <div class="clearfix"> </div>
            </div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---728x90--->
	<div class="footer_top">
	  <div class="span_of_4">
		<div class="col-md-3 box_4">
			<h4>Shop</h4>
			<ul class="f_nav">
				<li><a href="#">new arrivals</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">sale</a></li>
				<li><a href="#">style videos</a></li>
			</ul>	
		</div>
		<div class="col-md-3 box_4">
			<h4>help</h4>
			<ul class="f_nav">
				<li><a href="#">frequently asked  questions</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
			</ul>				
		</div>
		<div class="col-md-3 box_4">
			<h4>account</h4>
			<ul class="f_nav">
				<li><a href="#">login</a></li>
				<li><a href="#">create an account</a></li>
				<li><a href="#">create wishlist</a></li>
				<li><a href="#">my shopping bag</a></li>
				<li><a href="#">brands</a></li>
				<li><a href="#">create wishlist</a></li>
			</ul>
		</div>
		<div class="col-md-3 box_4">
			<h4>popular</h4>
			<ul class="f_nav">
				<li><a href="#">new arrivals</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">sale</a></li>
				<li><a href="#">style videos</a></li>
				<li><a href="#">login</a></li>
				<li><a href="#">brands</a></li>
			</ul>			
		</div>
		<div class="clearfix"></div>
	</div>
		<!-- start span_of_2 -->
		<div class="span_of_2">
			<div class="span1_of_2">
				<h5>need help? <a href="#">contact us <span> &gt;</span> </a> </h5>
				<p>(or) Call us: +22-34-2458793</p>
			</div>
			<div class="span1_of_2">
				<h5>follow us </h5>
				<div class="social-icons">
					     <ul>
					        <li><a href="#" target="_blank"></a></li>
					        <li><a href="#" target="_blank"></a></li>
					        <li><a href="#" target="_blank"></a></li>
					        <li><a href="#" target="_blank"></a></li>
					        <li class="last2"><a href="#" target="_blank"></a></li>
						</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="copy">
		   <p>© 2017 Fala Ti. All Rights Reserved.</p>
		</div>
     </div>
   </div>
</div>	
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
</body>
</html>		