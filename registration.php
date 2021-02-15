<?php
include "connect.php";


session_start();
	if(isset($_SESSION['u_name'])){	
	
	echo '
			<script type = "text/javascript">
				alert("ALREADY LOGED-IN");
				window.location = "index.php";
			</script>
		';
} else {
	require_once "header1.php";
?>
<!--header//-->
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script><!-- jQuery Library-->
<link rel="stylesheet" href="css/passwordscheck.css" /><!-- Include Your CSS file here-->
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="0px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>


<script>

$(document).ready(function() {
$('#password').keyup(function() {
$('#result').html(checkStrength($('#password').val()))
})
function checkStrength(password) {
var strength = 0
if (password.length < 6) {
$('#result').removeClass()
$('#result').addClass('short')
return 'Too short'
}
if (password.length > 7) strength += 1
// If password contains both lower and uppercase characters, increase strength value.
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
// If it has numbers and characters, increase strength value.
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
// If it has one special character, increase strength value.
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// If it has two special characters, increase strength value.
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')
return 'Weak'
} else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
return 'Good'
} else {
$('#result').removeClass()
$('#result').addClass('strong')
return 'Strong'
}
}
});


</script>



</head>
<div class="registration-form">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Registration</li>
		 </ol>
		 <h2>Registration</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
			 

				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously registered with us, <a href="login.php">click here</a></p>
				 <form action="i_new_user_details.php" method="POST">
					 <ul>
						 <li class="text-info">First Name: </li>
						 <li><input type="text" value="" name="fname"required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Last Name: </li>
						 <li><input type="text" value="" name="lname"></li>
					 </ul>	
						<ul>
						 <li class="text-info">E-mail: </li>
						 <li><input type="text" value="" name="email"></li>
					 </ul>	
					<ul>
						 <li class="text-info">Your User Name: </li>
						 <li><input type="text" value="" name="u_name" onkeyup="showResult(this.value)"></li>
						 <div id="livesearch"></div>

					 </ul>
					 <br>
					 <ul>
						 <li class="text-info">Password: </li>
						 <li><input type="password" value="" id="password" name="password"></li>
						 <p style= "color:Green"> <span id="result"> Strength</span></p>
						  {Include:Special Characters, Numbers}
					 </ul>
					<br>
					 <ul>
						 <li class="text-info">Mobile Number:</li>
						 <li><input type="text" value="" name="mobile_num"></li>
					 </ul>						 
					 <input type="submit" value="Register Now" name="submit">
					 <p class="click">By clicking this button, you agree to my modern style <a href="#">Pollicy Terms and Conditions</a> to Use</p> 
				 </form>
			 </div>
		 </div>
		 <div class="col-md-6 reg-right">
			 <h3>Create Free Account</h3>
			 <p>Register Now. It's completely free</p>
		</div>
		 <div class="clearfix"></div>		 
	 </div>
</div>
<!--fotter-->
<?php
 require_once "men_footer.php";
}
?>
<!--fotter//-->	
</body>
</html>	