<?php
/*
Template Name: Register
*/
get_header('inner');

require_once(ABSPATH . WPINC . '/registration.php');
?>


<body style="font-family: 'Open Sans', sans-serif;
  background:#3498db;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px; ">

<div class="box">
			<h1 style="font-size:1.5em;color:#525252;">Create Account</h1>


<form id="wp_signup_form" method="post">

        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="email">
        <label for="email">Email address</label>
        <input type="text" name="email" id="email" class="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="email">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="email">

       <br><br><input name="terms" id="terms" type="checkbox" value="Yes">
        <label for="terms">I agree to the Terms of Service</label>

        <input type="submit" id="submitbtn" name="submit" value="Sign Up" class="btn"/>
        <input type="hidden" name="action" value="register_action">
</form>

		<a  href="<?= get_bloginfo('url') .'/login'?>"><button id="btn2">Back to login</button></a>

 </div>


</body>

<?php
get_footer('inner');