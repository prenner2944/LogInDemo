<?php
echo("<?xml version=\"1.0\" encoding=\"UTF-8\"?>");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> G! - Log In </title>
    <link rel="stylesheet" type="text/css" href=css/style.css />
    <script type="javascript" src="jquery/jquery-2.0.3.min.js"></script>
    <script type="text/javascript">
    </script>
  </head>
  <body>

  <div id="head_tag">
  	<div id="top_info">
          <div class="info_right">
              <ul class="small-links">
                  <li>
                      <a href="index.php">Home</a>
                  </li>
                  <li>
                      <a href="login.php">Log in</a>
                  </li>
				  <li>
					  <a href="readme.php">Read Me</a>
				  </li>
              </ul>
          </div>
  		<p>G! A leader in widgets'n thingies</p>
      </div>
  </div>
  <div id="container">
  	<div id="header">
      	<ul class="header-menu">
      		<li>
      			<a href="shipping.php">Shipping</a>
      		</li>
      		<li>
				<a href="billing.php">Billing</a>
      		</li>
      		<li>
      			<a href="account.php">Account Info</a>
      		</li>
      		<li>
      			<a href="others.html">Others</a>
      		</li>
      	</ul>
      </div>

        <div class="divider"></div>

        <div class="info_sections">
        	<div class="p2">About Us</div>
        	<div class="info-box">
          	<div class="bodytext">

<form id="form0" method="post" action="createNewAccount.php"> 
    <fieldset class="newlogin">
        <legend>Create New Login</legend>
        <ul>
            <li> <label title="UserID" for="UserID">UserID <span>*</span></label> <input type="text" name="UserID" id="UserID" size="30" maxlength="30" value="<?php if(!empty($_SESSION["UserID"])) {echo($_SESSION["UserID"]);} ?>"</li>
			<li> <span id="usernameAvailability" class="checkId"></span></li>
			<li> <label title="Passwd" for="Passwd">Password<span>*</span></label> <input type="password" name="Passwd" id="Passwd" size="30" maxlength="30" value="<?php if(!empty($_SESSION["Passwd"])) {echo ($_SESSION["Passwd"]);}?>"</li>
			<li> <label title="PasswdConfrim" for="PasswdConfirm">Confirm Password<span>*</span></label> <input type="password" name="PasswdConfirm" id="PasswdConfirm" size="30" maxlength="30" value="<?php if(!empty($_SESSION["PasswdConfirm"])){echo($_SESSION["PasswdConfirm"]);}?>"</li>
			<li> <label title="Name" for="name">Name<span>*</span></label> <input type="text" name="name" id="name" size="30" maxlength="30" value="<?php if(!empty($_SESSION["name"])) {echo($_SESSION["name"]);} ?>"</li>
			<li> <label title="Email" for="email">Email <span>*</span></label> <input type="text" name="email" id="email" size="30" maxlength="30" value="<?php if(!empty($_SESSION["email"])) {echo($_SESSION["email"]);} ?>"</li>
		</ul>
		</fieldset>
		<fieldset id="submit">
			<input id="SubmitBtn" name="SubmitBtn" type="submit" value="Create New Account"/>
		</fieldset>
	</form>
		
	<div id="errorMsg"><?php if(!empty($_SESSION["errorMessage"])){echo($_SESSION["errorMessage"]);}?> </div>
		
	<script type="text/javascript">
		document.getElementById("UserID").focus
	</script>
    </div>


  </body>
</html>