<?php
 include"admin/php_action/db_connect.php"; 
?>
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
	  		<div class="clearfix"> </div>
		   </div>
		</div>
		 <div class="clearfix"></div>
	</div>
<div class="content">
<!--728x90-->
  <div class="content_box">
<!--teste-->
<?php
// Seleciona todos os usuários
$query = "SELECT product_name, quantity, product_img_front FROM product";

if ($result = mysqli_query($connect, $query)) {

    /* fetch associative array */
    while ($obj = mysqli_fetch_object($result)) {
        echo "<img src='fotos/".$obj->product_img_front."' alt='Foto de exibição' /><br />";
        // Exibimos o nome e email
		echo "<b>Nome:</b> " . $obj->product_name . "<br />";
		echo "<b>Quantidade:</b> " . $obj->quantity . "<br /><br />";
    }

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($connect);


?>
	<!--728x90-->
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
<script type="text/javascript" src="admin/custom/js/product.js"></script>
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