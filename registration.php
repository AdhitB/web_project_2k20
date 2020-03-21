
<!DOCTYPE html>
<head>
    <title>Registration Page</title>
	<link rel="icon" href="images/Movie.ico" type="image"/>
	<link href="css/mystyle.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script>

        //function to check username availability using ajax in the background
        function checkuname(){

            var uname = document.registration.username.value;
            // Create our XMLHttpRequest object
            envelop = new XMLHttpRequest();

            envelop.open("POST", "ajax.php", true);
            // Access the onreadystatechange event for the XMLHttpRequest object
            envelop.onreadystatechange = displayResult;
            // Set content type header information for sending url encoded variables in the request
            envelop.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            envelop.send("username=" + uname);
        }

        //function to display results for username availability
        function displayResult(){

            if (envelop.readyState == 4 && envelop.status == 200) {

                document.getElementById("message").innerHTML = envelop.responseText;
            }
        }

    </script>
</head>
<body>

        <header>
        <h1 style="color:black">Registration Page</h1>    

        </header>
   
        <div class="bgcolor2">
        
        
<div class="bgcolor">
<form id="frmFeedback" method="post" action="server.php"  class="w3-container" name="registration">
    <fieldset>
        <legend>User Information</legend>
        <label for="txtDisplayName" class="left">First Name <em>*</em></label>

       <input type="text" id="txtfirstName" name="fname" required="required" autofocus="autofocus"  style="color:#993300" placeholder="Enter First Name"/></br>
 <label for="txtDisplayName" class="left">Last Name <em>*</em></label>
  <input type="text" id="txtlastName" name="lname" required="required" autofocus="autofocus"  style="color:#993300" placeholder="Enter Last Name"/></br>

               <label class="left">Username <em>*</em></label>
       <input type="text" id="txtusername" name="username" required="required" autofocus="autofocus" placeholder="Enter Username" style="color:#993300" onblur="checkuname();"/></br>
       
       <label class="left">Password <em>*</em></label>
       <input type="password" id="password" name="password" required="required" autofocus="autofocus" placeholder="Enter Password" style="color:#993300" />
       <div id="message"></div>
     </br>

       
        <label for="txtEmail" class="left">Email Address<em>*</em></label>
       
    
        <input type="email" id="txtEmail" name="email" placeholder="Enter email address" required="required"  style="color:#993300" placeholder="Enter email address"/>
        <br/>
        <label for="txtPostDate" class="left">Date Of Birth<em>*</em></label>
        <input type="date" id="txtPostDate" name="dob" required="required"  style="color:#993300"/>
        <br/>
        <label for="txtPhone" class="left">Mobile Number </label>
        <input type="tel" id="txtPhone" name="mobile"  placeholder="5999-9999" style="color:#993300"/>
        <br/>

		<label class="left"> Gender: </label><br/>
		<table>
			<td> <label for="rdoMale"> Male </label></td>
			<td><input class="w3-check" type="radio" id="rdoMale" name="gender" value ="Male" /></td><td width=50px  style="color:#993300"></td>
			<td><label for="rdoFemale"> Female </label></td>
			<td><input class="w3-check" type="radio" id="rdoFemale" name="gender"  value ="Female" style="color:#993300"/></td>
		</tr>
		</table>
    <br/>
    <div class="center">
        <input type="submit" value="Submit Registration Form" id="btnSubmit" name="register"/> &nbsp;&nbsp; <input type="reset" value="Reset Registration Form" id="btnReset"/>
    </div>
    <br/>
</form>
</div>

</body>

</html>