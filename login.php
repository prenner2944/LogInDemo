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
          	<form id="form" method="post" action="doLogin.php">
				<fieldset class="loginpage">
				<legend>Log In</legend>
				<ul>
					<li> <label title="Login" for="login">Login<span>*</span></label> <input type="text" name="login" id="login" size="15" maxlength="30"/></li>
					<li> <label title="Passwd" for="passwd">Password<span>*</span></label><input type="password" name="passwd" id="passwd" size="30" maxlength="30"/></li>
					</ul>
				</fieldset>
				<fieldset class="submit">
					<input id="SubmitBtn" name="SubmitBtn" type="submit" value="Login" />
				</fieldset>
				</form>
			<div id="errorMsg"></div>
				<p style="margin-left: 10px;">New user? <a href="newLogin.php">Create a New Account</a>.</p>
          </div>
			<script type="text/javascript">
				document.getElementById("login").focus();
			</script>
    </div>


  </body>
</html>