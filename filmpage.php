<!DOCTYPE HTML>
<head>
<title>Science Fiction 2018</title>
<link rel="icon" href="images/Movie.ico" type="image"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/mystyle.css" rel="stylesheet" type="text/css" media="all"/>

<style>
	.center {
    text-align: center;
}
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
}
.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #006400;}
</style>
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
							<!--<li><a href="registration.php">Register</a></li>
							<li><a href="login.php">Login</a></li>
							 <li><a href="#">Checkout</a></li> 
							<li><a href="#">My Account</a></li> -->
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">
					
						  <div class="cart">
						  	   <p><span>Cart Total : </span><div id="dd" class="wrapper-dropdown-2"> 
							   	
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
		<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Home</a> &gt;&gt; <a href="filmpage.php" class="active">SciFi 2018</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
 	
	<div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3 style="color:#FF0000">2018 Blockbusters</h3>
    		</div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/mazerunner.jpg" alt="" /></a>
					 <h2><a href="preview.php">Maze Runner</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$42</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a  onclick="changeText(42)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/annihilation.jpg" alt="" /></a>
					 <h2><a href="preview.php">Annihilation</a></h2>
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
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/readyplayerone.jpg" alt="" /></a>
					 <h2><a href="preview.php">Ready Player One</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$32</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a onclick="changeText(32)">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/predator.jpg" alt="" /></a>
					 <h2><a href="preview.php">Predator</a></h2>
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
					<a href="preview.php"><img src="images/solo.jpg" alt="" /></a>
					 <h2><a href="preview.php">Solo</a></h2>
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
			
			
			<div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/jurassic.jpg" alt="" /></a>
					 <h2><a href="preview.php">Jurassic World</a></h2>
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
					 <a href="preview.php"><img src="images/pacificrim.jpg" alt="" /></a>
					 <h2><a href="preview.php">Pacific Rim</a></h2>
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
					<a href="preview.php"><img src="images/rampage.jpg" alt="" /></a>
					 <h2><a href="preview.php">Rampage</a></h2>
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
					<a href="preview.php"><img src="images/antman.jpg" alt="" /></a>
					 <h2><a href="preview.php">Antman and The Wasp</a></h2>
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
					<a href="preview.php"><img src="images/deadpool.jpg" alt="" /></a>
					 <h2><a href="preview.php">Deadpool 2</a></h2>
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
  
  <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/shazam.jpg" alt="" /></a>
					 <h2><a href="preview.php">Shazam!</a></h2>
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
					 <a href="preview.php"><img src="images/axl.jpg" alt="" /></a>
					 <h2><a href="preview.php">A-X-L</a></h2>
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
					<a href="preview.php"><img src="images/thedarkestminds.jpg" alt="" /></a>
					 <h2><a href="preview.php">The Darkest Minds</a></h2>
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
					<a href="preview.php"><img src="images/themeg.jpg" alt="" /></a>
					 <h2><a href="preview.php">The Meg</a></h2>
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
					<a href="preview.php"><img src="images/cloverfield.jpg" alt="" /></a>
					 <h2><a href="preview.php">The Cloverfield Paradox</a></h2>
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
  
    <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/thetitan.jpg" alt="" /></a>
					 <h2><a href="preview.php">The Titan</a></h2>
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
					 <a href="preview.php"><img src="images/birdbox.jpg" alt="" /></a>
					 <h2><a href="preview.php">Bird Box</a></h2>
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
					<a href="preview.php"><img src="images/kin.jpg" alt="" /></a>
					 <h2><a href="preview.php">Kin</a></h2>
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
					<a href="preview.php"><img src="images/incredibles.jpg" alt="" /></a>
					 <h2><a href="preview.php">Incredibles 2</a></h2>
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
					<a href="preview.php"><img src="images/bumblebee.jpg" alt="" /></a>
					 <h2><a href="preview.php">Bumblebee</a></h2>
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
  
      <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/thehouse.jpg" alt="" /></a>
					 <h2><a href="preview.php">The House with a clock in its walls</a></h2>
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
					 <a href="preview.php"><img src="images/firstman.jpg" alt="" /></a>
					 <h2><a href="preview.php">First Man</a></h2>
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
					<a href="preview.php"><img src="images/godzilla.jpg" alt="" /></a>
					 <h2><a href="preview.php">Godzilla</a></h2>
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
					<a href="preview.php"><img src="images/Halloween.jpg" alt="" /></a>
					 <h2><a href="preview.php">Halloween</a></h2>
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
					<a href="preview.php"><img src="images/thefirstpurge.jpg" alt="" /></a>
					 <h2><a href="preview.php">The First Purge</a></h2>
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
  
  <div class="center">
  <div class="pagination">
    <a href="filmpage.php">&laquo;</a>
    <a href="filmpage.php">1</a>
    <a href="filmpage2.php">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
  </div>
</div>

   <div class="footer" style="background-color:#DCDCDC">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.php">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.php">Sign In</a></li>
							<li><a href="index.php">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="contact.php">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+230 123 4567</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
    </div>
</body>
</html>
