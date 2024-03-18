<?php
	session_start();
	require ("config.php");
	$userName = "";
	if(isset($_SESSION["uname"])){
		
		$userName=$_SESSION["uname"];
	}
	else{
		header("Location:'login.html'");
	}
	
	?>
	
<!DOCTYPE html>

<html>
	<head>
		<title>Feedback</title>
		
		<!--add stylesheet-->
		<link rel="stylesheet" href="styles/home.css">
		<link rel="stylesheet" href="styles/feedback.css">
		
	</head>
	
	<body>
<!--header........................................................................................................................................-->
		<div name="header">
			<img class="logo" src = "images\logo.png" onclick="window.location.href = 'homelogged.php'" width="250" height="200" alt="Logo">
		
		
		<h1 class="title"> Wedding with Smile </h1>
		
		<div class="register">
		<form method="POST" action="logout.php">
			<input type ="submit" name="logout" class="btnlogin" value="Log Out" >	
		</form>
		<form method="POST" action="User_Profile.php">
			<input type ="submit" class="btnsignup" value="Profile" >
		</form>
		</div>
		
		
		<ul class="menu">
			<li class="menulist"><a href="contactuslogged.html"> Contact Us</a></li>
			<li class="menulist"><a href="aboutuslogged.html">About Us</a></li>
			<li class="menulist"><a href="ourpackageslogged.html">Our Services</a></li>
			<li class="menulist"><a href="homelogged.php">Home</a></li>
		</ul>
		</div>
		
		<!-- Form  --...................................................................................................................................>
		<!--<form action="userprofile.php" method="post">-->
		
			    <center> <h2 style="color:#AB0552; font-size: 40px; font-family:Calibri" > Give your Feedback </h2></center>
				<div class="box">
				
				<label  > Full Name  </label>
				<input type="text" id="name" name="name"  value=<?php echo $userName?>/>
				<br><br>
				
				<label> Select your package  </label> 
				
			<!--drop down .........................................................................................................................-->
			<input list="pak" name="pak">
			<datalist id="pak">
			<option value="Pre shoot package">
			<option value="Sliver package">
			<option value="Gold package">
			<option value="Platinum package">
			</datalist> 
			<br>
			<br>
			<br>




				<label> Please leave your Feedback below &nbsp &nbsp  &nbsp &nbsp </label> <br>
			<textarea name="message" rows="5" cols="50"  > </textarea>
			<br/><br/>
			
			<div class="clear"></div> 
		  <hr class="survey-hr">
		<label>Rate to Us...........</label><br>

		<div class="rate">
			<input type="radio" id="star5" name="rate" value="5" />
			<label for="star5" title="text">★</label>
			<input type="radio" id="star4" name="rate" value="4" />
			<label for="star4" title="text">★</label>
			<input type="radio" id="star3" name="rate" value="3" />
			<label for="star3" title="text">★</label>
			<input type="radio" id="star2" name="rate" value="2" />
			<label for="star2" title="text">★</label>
			<input type="radio" id="star1" name="rate" value="1" />
			<label for="star1" title="text">★</label>
		</div>
				
				<br><br>
			<center><input type="submit" name="submit" class="fbsubmit" onclick="window.location.href = 'User_Profile.php'" value="SUBMIT" id="submit"></center>				
			
				
				
				

</div>
			  </form>
			</content>
			</center>
		

<!--footer..............................................................................................................................-->
		
		<div name="footer">
			<footer class="footer">
			<img src="images/logo.png" align ="center" width="120" height="90" alt="Logo">
			<p>
<a href="#">Home</a>
&nbsp
<a href="#">Terms of Use</a>
&nbsp
<a href="#">News</a>
&nbsp
<a href="aboutus.html">About Us</a>
&nbsp

</p>

			<p class="footer-copyright">Wedding with Smile &copy; 2021</p>

		</footer> </div>
		
	</body>
	
</html>