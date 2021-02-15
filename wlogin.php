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
<!--header//--><head>

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
  xmlhttp.open("GET","validation.php?u_name="+str,true);
	xmlhttp.open("GET","validation.php?password="+str,true);
  xmlhttp.send();
  xmlhttp.send();
}

</script>


</head>

<div class="login">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the following details to continue.</p>
				 <form action="validation.php" method="post">
					 <h5>User Name:</h5>	
					 <input type="text" value="" name="u_name"required="" >
					  <div id="livesearch"></div>
					  <h5>Password:</h5>
					 <input type="password" value="" name="password"required=""  >					
					  <div id="password"></div>
					 <input type="submit" value="Login" onkeyup="showResult(this.value)">
					  <div id="livesearch"></div>
					  WORNG USER ID OR PASSWORD!!!
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="registration.php">Create an Account</a>
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