<!DOCTYPE HTML>
<head>
<title>Contact Us</title>
<link rel="icon" href="images/Movie.ico" type="image"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>


<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.php">Home</a></li>
						
						
					</ul>
				</div>
					<div class="account_desc">
						<ul>						
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
						<a href="index.php"><img src="images/logo.png" alt="AM Cinema Logo" Width="80%" height="50%" /></a>
					</div>
						<div class="header_top_right">
						  <div class="cart">
						  	   <p><span>Cart</span><div id="dd" class="wrapper-dropdown-2"> (empty)
						  	   	<ul class="dropdown">
										<li>you have currently no items in your Shopping cart</li>
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
											$(this).toggleClass('active');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});
					
								});
					    </script>
			   <div class="clear"></div>
  		    </div>     				
   		</div>
   </div>
 <div class="main">
 	<div class="wrap">
     <div class="content">
     	<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Home</a> &gt;&gt;&gt;&gt; <a href="#" class="active">Contact</a></p>
    	    </div>
    		
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2 style= "text-align: center;color:black"><em><b><strong style="color:#604020">Contact Us</strong></b></em></h2>
					    <form method="post" action="contact-post.php">
					    	<div><div style="color:black">
						    	<span><label>First Name</label></span>
						    	<span><input name="userName" type="text" class="textbox" style="color:#993300"></span>
						    </div>
						    <div>
						    	<span><label>Last Name</label></span>
						    	<span><input name="usernames" type="text" class="textbox" style="color:#993300"></span>
						    </div>
						    <div>
						     	<span><label>Email Address</label></span>
						    	<span><input name="userEmail" type="text" class="textbox" style="color:#993300"></span>
						    </div>
						    <div class="country">
						    	<span><label>Country</label></span>
						    	<select id="country" name="country" style="color:#993300">
      								<option value="australia">AUSTRALIA</option>
								  	<option value="canada">CANADA</option>
								    <option value="usa">USA</option>
								    <option value="australia">AUSTRALIA</option>
								    <option value="canada">CANADA</option>
								    <option value="china">CHINA</option>
								    <option value="india">INDIA</option>
								    <option value="pakistan">PAKISTAN</option>
								    <option value="saudi arabia">SAUDI ARABIA</option>
								    <option value="egypt">EGYPT</option>
								    <option value="turkey">TURKEY</option>
								    <option value="istanbul">ISTANBUL</option>
								    <option value="mauritius">MAURITIUS</option>
								    <option value="jerusalem">JERUSALEM</option>
								    <option value="russia">RUSSIA</option>
								    <option value="iceland">ICELAND</option>
								    <option value="greenland">GREENLAND</option>
								    <option value="south africa">SOUTH AFRICA</option>
    							</select>
						    </div></div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="userMsg" style="color:#993300"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"  align="right" class="mybutton" a href="#"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				
      			
				 </div>
			  </div>		
         </div> 
    </div>
 </div>
   <div class="footer">
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
							<li><a href="file:///C:/Users/Mmuqtasid%20MMB/Desktop/web/login.php" target="_blank" style="color:#993300">Sign In</a></li>
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
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

