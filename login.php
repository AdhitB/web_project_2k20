
<!DOCTYPE HTML>
<head>
<title>Login</title>
<link rel="icon" href="images/Movie.ico" type="image"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/mystyle.css" rel="stylesheet" type="text/css" media="all"/>

<!-- -->
<!--<script>
function validateBlank()
{
var x=document.login.username.value;
if (x==null || x=="")
  {
  alert("PLEASE ENTER USERNAME ");
  return false;
  }

var y=document.login.password.value;
if (y==null || y=="")
  {
  alert("PLEASE ENTER PASSWORD ");
  return false;
  }
}
</script>
<script>

function checkpass()
{

var x =  document.login.username.value
var y=  document.login.password.value
if ((x=="admin") && (y=="admin"))
{
window.open("index.html")
}
else
	{	
	alert("WRONG CREDENTIALS");
	}
}
</script>

<script>
function registration(){
window.open("registration.html", "myWindow",
"status=1,height=800,width=550,resizable=0")
}
</script> -->

</head>
<body>
	<div class="header1">
		 <div class="headertop_desc1">
			<div class="wrap">
				<div class="nav_list">
					
				</div>
					<div class="account_desc">
						<ul>
							<a href = " registration.php"><li style="color:white">Register</li></a>	
						
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
 	
	<div class="login-box">
		<div class="login-content">
		<br/><br/>
			<form method="post" action="validation.php" >
			<p style="color:white">USERNAME : <input type ="text" name ="username" placeholder="Username" /><pre></pre>
			<p style="color:white">PASSWORD : <input type ="password" name ="password" placeholder="Enter Your Passsword"/><pre></pre>
			<center>
			<input type="submit" value="LOGIN" name="login"></center>
			</br><p> 
			<div style="text-align: right">
			<a href = " passwrdfgt.html" style="align"> <font style="font-size:15px"><p style="color:white"><u>Forgotten your password? </u></p></font></a> 
			</div> 	
			</p></center>
</form>
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
						<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="contact.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+230 57770009</span></li>
							<li><span>+230 57587488</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
    </div>

</body>
</html>

