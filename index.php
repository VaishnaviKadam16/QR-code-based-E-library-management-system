<?php
 session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.php">
      <title>Digital Library System</title>
   </head>
  <body>
<h1>Welcome to E-Library</h1>

<button onclick="document.getElementById('id01').style.display='block'" class="log">Login</button>

<div id="id01" class="modal">
<span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close Modal">&times;</span>

<form class="modal-content animate" action="us-log.inc.php" method="POST">
<div class="container">
    <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter  Email" name="email" required>
    <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label class="pas">
      <input type="checkbox" checked="checked" name="remember"  style="margin-bottom:15px"> Remember me</label><br>
     <span class="psw">Forgot <a href="#">password?</a></span><br>
  <button type="submit"  class="loginbtn" name="submit">Login</button>
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbutton">Cancel</button>
    
  </div>
</form>

<div class="msg">
<?php

if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Fill in all fields!</p>";
  }
  if($_GET["error"] == "wronglogin"){
    echo "<p>Incorrect Login Information</p>";
  }
  }

if(isset($_SESSION["adid"])){
  /*echo "<li><a href='home.php'>Home</a></li>";
  echo "<li><a href='profile.php'>E-Card</a></li>";
  echo "<li><a href='ad-logout.inc.php'>Log-out</a></li>";*/
}

?></div>
</div>

<!-- Button to open the modal Sign up  -->
<button onclick="document.getElementById('id02').style.display='block'" class="reg">New Registration</button>  
<!-- The Modal (contains the Sign Up form) -->
<div id="id02" class="modal1">
<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal1">&times;</span>
<form class="modal1-content" action="us-register.inc.php" method="POST">

<div class="container">
<h2>New Registration</h2>
<p>Please fill in this form to get E-library card.</p>
<hr>  

<label for="name"><b>Name</b></label>
<input type="text" placeholder="Enter Name" name="name" required>
<div class="styled" style="width:200px;">
<span class="arrow"></span>
<label for="Branch"> <b>Branch</b></label>

<select name="branch">  
<option value="0">Select</option>  
<option value="Information Technology">Information Technology</option> 
<option value="Computer Engineering">Computer Engineering</option> 
<option value="Civil Engineering">Civil Engineering</option>  
<option value="Mechanical Engineering">Mechanical Engineering</option> 
<option value="Electrical Engineering">Electrical Engineering</option>  
<option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>  
<option value="MCA">MCA</option>  
<option value="MBA">MBA</option>  
</select>

<label for="year"><b>Year</b></label>
<select name="year">
<option value="0">Select</option> 
<option value="FE">FE</option> 
<option value="SE">SE</option> 
<option value="TE">TE</option> 
<option value="BE">BE</option> 
</select><br><br>
</div>
<label for="rollno"><b>Roll No </b></label>
<input type="text" placeholder="Enter Roll No" name="rollno" required>

<label for="phone"><b>Phone</b></label>
<input type="text" placeholder="Enter No" name="phone" size="10" required>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
<label for="pswrepeat"><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password" name="pswrepeat" required>
<label>
<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>

<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

<div class="clearfix">

<button type="submit" name="submit" onclick="document.getElementById('id03').style.display='block'" class="signupbtn">Sign Up</button>
<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
</div>
</div>
</form>

<div class="msg">
<?php

if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Fill in all fields!</p>";
  }
  if($_GET["error"] == "invaliduid"){
    echo "<p>Choose proper Username</p>";
  }
  if($_GET["error"] == "invalidemail"){
    echo "<p>Choose proper Email</p>";
  }
  if($_GET["error"] == "invalidphone"){
    echo "<p>choose proper Phone number</p>";
  }
  if($_GET["error"] == "passworddontmatch"){
    echo "<p>Passwords don't match</p>";
  }
  if($_GET["error"] == "stmtfailed"){
    echo "<p>Something went wrong</p>";
  }
  if($_GET["error"] == "emailtaken"){
    echo "<p>Email already taken</p>";
  }
  if($_GET["error"] == "none"){
    echo "<p>Registration Successful!</p>";
  }

}
?></div>
</div>


<div class="admin-details">
<button onclick="document.getElementById('id03').style.display='block'" class="admin">Admin</button>
<div class="ad-modal" id="id03">
<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal1">&times;</span>

<div class="container1">
<h1>Login</h1>
<form class="modal-content animate" action="ad-log.inc.php" method="POST">
<div class="container">
    <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
    <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label class="pas">
     <button type="submit"  class="loginbtn" name="submit">Login</button>
   
    
  </div>
</form>
<div class="msg">
<?php

if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Fill in all fields!</p>";
  }
  if($_GET["error"] == "wronglogin"){
    echo "<p>Incorrect Login Information</p>";
  }
  }

if(isset($_SESSION["adid"])){
  /*echo "<li><a href='home.php'>Home</a></li>";
  echo "<li><a href='profile.php'>E-Card</a></li>";
  echo "<li><a href='ad-logout.inc.php'>Log-out</a></li>";*/
}

?></div>
</div>

<div class="container2">
<h1>Register</h1>
<form class="modal-content1 animate" action="ad-register.inc.php" method="POST">
<div class="container">
<label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username " name="uname" required>
      <label for="phone"><b>Phone</b></label>
<input type="text" placeholder="Enter No" name="phone" size="10" required>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
    <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label class="pas">
      <label for="pswrepeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pswrepeat" required>
      <label class="pas">
      
      <button type="submit"  class="loginbtn" name="submit">Register</button>
  </div>
</form>

<div class="msg">
<?php

if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Fill in all fields!</p>";
  }
  if($_GET["error"] == "invaliduid"){
    echo "<p>Choose proper Username</p>";
  }
  if($_GET["error"] == "invalidemail"){
    echo "<p>Choose proper Email</p>";
  }
  if($_GET["error"] == "invalidphone"){
    echo "<p>choose proper Phone number</p>";
  }
  if($_GET["error"] == "passworddontmatch"){
    echo "<p>Passwords don't match</p>";
  }
  if($_GET["error"] == "stmtfailed"){
    echo "<p>Something went wrong</p>";
  }
  if($_GET["error"] == "emailtaken"){
    echo "<p>Email already taken</p>";
  }
  if($_GET["error"] == "none"){
    echo "<p>Registration Successful!</p>";
  }

}
?></div>
</div>


</div>
<!--End ad-modal-->
</div>
<!--End admin-details-->


  </body>
</html>