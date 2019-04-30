<?php
/*
Template Name: Login
*/

get_header('inner');
?>

<body style="font-family: 'Open Sans', sans-serif;
  background:#3498db;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px; ">

<div class="box">
			<h1 style="font-size:1.5em;color:#525252;">Log In Page</h1>

<form id="login_form" method="post">

				 <label for="username">Username</label>
        <input id="username" type="text" placeholder="Username" name="username" class="email">

         <label for="username">Password</label>
        <input id="password" type="password" placeholder="Password" name="password" class="email">
        <input id="submit" type="submit" name="submit" value="Submit" class="btn">
        <input type="hidden" name="action" value="custom_action">
</form>


	<a  href="<?= get_bloginfo('url') .'/register'?>"><button id="btn2">Register</button></a>
 </div>


</body>

<?php
get_footer('inner');