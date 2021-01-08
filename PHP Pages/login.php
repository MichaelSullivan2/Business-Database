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
 position: absolute; margin: 120px 0 0 1120px;
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
<br></br>

<div style="width:600px;  position: absolute; margin: -80px 0 0 1120px;">
        <h2>Login</h2>
        <p>(for testing purposes: 12799 is a valid Employee Number)</p>
</div>
        <table cellpadding="5">
        <form action="login.inc.php" method="post">
       
        <tr><td>Username</td><td><input type="text" name="uid" placeholder="Username"></td></tr>
        <tr><td>Employee Number</td><td><input type="number" name="empId" placeholder="Employee Number..."></td></tr>
        <tr><td>Password</td><td><input type="password" name="pwd" placeholder="Password"></td></tr>
        
       
</table>
<br></br>
<button type="submit" name="submit-search">Login</button>
</div>
</form>

    <?php
    include_once 'Footer.php';
    ?>