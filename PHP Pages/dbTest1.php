
<html>
<head>
<title>Testing Forms</title>
</head>
<body>

<?php 
           $myfile = fopen("connection_info.txt", "r") or die("Unable to open \"../connection_info.txt\" file!");
           $my_host = fgets($myfile);
           $my_dbname = fgets($myfile);
           $my_user = fgets($myfile);
           $my_password = fgets($myfile);
           fclose($myfile);
         
           $db = pg_connect("host=$my_host dbname=$my_dbname user=$my_user password=$my_password");
       
?>
</form>
</body>
</html>
