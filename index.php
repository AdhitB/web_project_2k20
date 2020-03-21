<?php 
	session_start();
	//if user is not logged in, they cannot access this page
	if (!isset($_SESSION['username'])){
	header('location: login.php');
}
 ?>
<!DOCTYPE HTML>
<head>
<title>AM CINEMA</title>
<link rel="icon" href="images/Movie.ico" type="image"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/acordion.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<script>	
function changeText(value) {
	var  totalprice = parseFloat(document.getElementById('count').value);
	//alert(totalprice);
     totalprice=totalprice+ parseFloat(value);   
	// alert(totalprice);
	 document.getElementById('count').value=totalprice;
}
	 </script>

	<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->	

</head>
<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>

					<div class="account_desc">
						<ul>
							<li style="color: white">Welcome <strong><?php echo $_SESSION['username']; ?></strong></li>
							<li><a href="logout.php">Logout</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">My Account</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.php"><img src="images/logo4.png" alt="" /></a>
					</div>
						<div class="header_top_right">
					
						  <div class="cart">
						  	   <p><span>Cart Total :$ </span><div id="dd" class="wrapper-dropdown-2"> 
							   	
							  <input type="text" id="count" value="0" style="border: none; background-color: transparent; "/>
						  	   	<ul class="dropdown">
										<li>you have no items in your Shopping cart</li>
								</ul></div></p>
						  </div>
							  <div class="search_box">
					     		<form>
					     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
					     		</form>
					     	</div>
						 <div class="clear"></div>
					</div>
						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;
					
										obj.dd.on('click', function(event){
											$(this).toggleClass('active1');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active1');
									});
					
								});
					    </script>
			 <div class="clear"></div>
  		</div>     
				<div class="header_bottom">
					<div class="header_bottom_left">				
						<div class="categories">
						   <ul>
						  	  <li> <h3>Categories</h3></li>
								  <li><button class="collapsible1">Bollywood</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div>
									</li>
									<li><button class="collapsible1">Hollywood</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Family</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Romantic Comedy</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Science Fiction</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Adventure</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Comedy</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Action</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Horror</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Fantasy</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Animation</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>
									</div></li>
									<li><button class="collapsible1">Thriller</button>
										<div class="content1">
										  <nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
										  <li><a href="filmpage.php" target="frame">2017</a></li>
										  <li><a href="filmpage.php" target="frame">2016</a></li></nav>

									</div></li>

									<li><button class="collapsible1">Western</button>
										<div class="content1">
										<nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
												<li><a href="filmpage.php" target="frame">2017</a></li>
										  		<li><a href="filmpage.php" target="frame">2016</a></li></nav>
										</div></li>
										 
										<li><button class="collapsible1">Documentary</button>
											<div class="content1">
										<nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
												<li><a href="filmpage.php" target="frame">2017</a></li>
										  		<li><a href="filmpage.php" target="frame">2016</a></li></nav>
										</div></li>

										<li><button class="collapsible1">Crime</button>
												<div class="content1">
												<nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
												<li><a href="filmpage.php" target="frame">2017</a></li>
										  		<li><a href="filmpage.php" target="frame">2016</a></li></nav>
										</div></li>
										<li><button class="collapsible1">Anime</button>
												<div class="content1">
												<nav><ul><li><a href="filmpage.php" target="frame">2018</a></li>
												<li><a href="filmpage.php" target="frame">2017</a></li>
										  		<li><a href="filmpage.php" target="frame">2016</a></li></nav>
										</div></li>
									
						  	 </ul>
						</div>					
		  	         </div>
						    <div class="header_bottom_right">

						 	    <!-- Start WOWSlider.com BODY section -->
								<div id="wowslider-container1">
									<div class="ws_images"><ul>
										<li><img src="data1/images/antman_and_the_wasp_2018.png" alt="ANT-MAN AND THE WASP (2018)" title="ANT-MAN AND THE WASP (2018)" id="wows1_0"/></li>
										<li><img src="data1/images/avengers_infinity_wars_2018.jpg" alt="AVENGERS INFINITY WARS (2018)" title="AVENGERS INFINITY WARS (2018)" id="wows1_1"/></li>
										<li><img src="data1/images/deadpool_2_2018.jpg" alt="DEADPOOL 2 (2018)" title="DEADPOOL 2 (2018)" id="wows1_2"/></li>
										<li><img src="data1/images/the_predator_2018.jpg" alt="THE PREDATOR (2018)" title="THE PREDATOR (2018)" id="wows1_3"/></li>
										<li><a href="http://wowslider.net"><img src="data1/images/the_nun_2018.jpg" alt="image slider" title="THE NUN (2018)" id="wows1_4"/></a></li>
										<li><img src="data1/images/venom_2018.jpg" alt="VENOM (2018)" title="VENOM (2018)" id="wows1_5"/></li>
									</ul></div>
							<div class="ws_bullets"><div>
								<a href="#wows1_0" title="ANT-MAN AND THE WASP (2018)"><span><img src="data1/tooltips/antman_and_the_wasp_2018.png" alt="ANT-MAN AND THE WASP (2018)"/>1</span></a>
								<a href="#wows1_1" title="AVENGERS INFINITY WARS (2018)"><span><img src="data1/tooltips/avengers_infinity_wars_2018.jpg" alt="AVENGERS INFINITY WARS (2018)"/>2</span></a>
								<a href="#wows1_2" title="DEADPOOL 2 (2018)"><span><img src="data1/tooltips/deadpool_2_2018.jpg" alt="DEADPOOL 2 (2018)"/>3</span></a>
								<a href="#wows1_3" title="THE PREDATOR (2018)"><span><img src="data1/tooltips/the_predator_2018.jpg" alt="THE PREDATOR (2018)"/>4</span></a>
								<a href="#wows1_4" title="THE NUN (2018)"><span><img src="data1/tooltips/the_nun_2018.jpg" alt="THE NUN (2018)"/>5</span></a>
								<a href="#wows1_5" title="VENOM (2018)"><span><img src="data1/tooltips/venom_2018.jpg" alt="VENOM (2018)"/>6</span></a>
								</div></div>
								<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery carousel slider</a> by WOWSlider.com v8.8</div>
								<div class="ws_shadow"></div>
								</div>

								<script type="text/javascript" src="engine1/wowslider.js"></script>
								<script type="text/javascript" src="engine1/script.js"></script>
							<!-- End WOWSlider.com BODY section -->

			         </div>
			     <div class="clear"></div>
			</div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Releases</h3>
    		</div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/thenun.jpg" alt="" /></a>
					 <h2><a href="preview.php">The Nun</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$49</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a  onclick="changeText(49)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/dontbreathe.jpg" alt="" /></a>
					 <h2><a href="preview.php">Don't Breathe</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$41</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(41)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/split.jpg" alt="" /></a>
					 <h2><a href="preview.php">Split</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$37</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(37)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/thugsofhindostan.jpg" alt="" /></a>
					 <h2><a href="preview.php">Thugs Of Hindostan</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$29</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(29)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/aquietplace.jpg" alt="" /></a>
					 <h2><a href="preview.php">A Quiet Place</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$40</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(40)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>				     
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Popular Movies</h3>
    		</div>
    	  </div>
			<div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/theconjuring.jpg" alt="" /></a>
					 <h2><a href="preview.php">The Conjuring</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$39</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(39)">Add to Cart</a></h4>
							     </div>
								
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/lalaland.jpg" alt="" /></a>
					 <h2><a href="preview.php">La La Land</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$35</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(35)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/pk.jpg" alt="" /></a>
					 <h2><a href="preview.php">PK</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$30</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(30)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/inception.jpg" alt="" /></a>
					 <h2><a href="preview.php">Inception</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$49</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(49)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/interstellar.jpg" alt="" /></a>
					 <h2><a href="preview.php">Interstellar</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$36</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(36)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					 </div>				     
				</div>
			</div>
       </div>
  </div>
</div>
   <div class="footer"">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4 style="color:black">Information</h4>
						<ul>
						<li><a href="#" style="color:#993300">About Us</a></li>
						<li><a href="#" style="color:#993300">Customer Service</a></li>
						<li><a href="#" style="color:#993300">Advanced Search</a></li>
						<li><a href="#" style="color:#993300">Orders and Returns</a></li>
						<li><a href="contact.php" style="color:#993300">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4 style="color:black">Why buy from us</h4>
						<ul>
						<li><a href="#" style="color:#993300">About Us</a></li>
						<li><a href="#" style="color:#993300">Customer Service</a></li>
						<li><a href="#" style="color:#993300">Privacy Policy</a></li>
						<li><a href="contact.php" style="color:#993300">Site Map</a></li>
						<li><a href="#" style="color:#993300">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4 style="color:black">My account</h4>
						<ul>
							<li><a href="contact.php" style="color:#993300">Sign In</a></li>
							<li><a href="index.php" style="color:#993300">View Cart</a></li>
							<li><a href="#" style="color:#993300">My Wishlist</a></li>
							<li><a href="#" style="color:#993300">Track My Order</a></li>
							<li><a href="https://www.google.mu/" target="_blank" style="color:#993300">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4 style="color:black">Contact</h4>
						<ul>
							<li><span>+230 57587488</span></li>
							<li><span>+230 57770009</span></li>
						</ul>
						<div class="social-icons">
							<h4 style="color:black">Follow Us</h4>
					   		  <ul>
							      <li><a href="https://www.facebook.com" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="https://twitter.com/?lang=en" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="https://www.skype.com/en/" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="https://www.linkedin.com/" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			 <div class="copy_right">
			
		   </div>			
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
	
	<script>
	var coll = document.getElementsByClassName("collapsible1");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}</script>
</body>
</html>

