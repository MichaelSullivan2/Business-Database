<?php
include_once 'NewHeader.php';

?>
<html>
  <style>
button {
 
 background-color: darkgrey;
 color: white;
 border-radius: 25px;
 width: 120px;
 padding: 2px;
 margin:0 50%; 
 position: absolute; margin: 190px 0 0 1120px;
 left: 200px;

}
table {
    width:310px;  position: absolute; margin: 20px 0 0 1120px;
  border: 1px solid black;
        display: inline-block;
}
div {
  margin-left: auto; 
  margin-right: auto;
}
</style>
<body>
<br></br>

<div style="width:600px;  position: absolute; margin: -50px 0 0 1120px;">
        <h2>Sign Up</h2>
        </div>
        <table cellpadding="5">
       
        <form action="signup.inc.php" method="POST">
        <tr><td>Full Name</td><td><input type="text" name="name" placeholder="Full Name"></td></tr>
        
        <tr><td>Email</td><td><input type="email" name="email" placeholder="Email..."></td></tr>
        <tr><td>Username</td><td><input type="text" name="uid" placeholder="Username..."></td></tr>

        <tr><td>Password</td><td><input type="password" name="pwd" placeholder="Password"></td></tr>
        <tr><td>Repeat Password</td><td><input type="password" name="pwdrepeat" placeholder="Repeat Password"></td></tr>
</table>
<br></br>
        <button type="submit" name="submit-search">Sign Up</button>

    <?php
    include_once 'Footer.php';
    ?>