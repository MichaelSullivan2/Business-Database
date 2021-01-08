<?php
    include 'dbTest1.php';
 ?>
 <?php
 $myfile = fopen("connection_info.txt", "r") or die("Unable to open \"../connection_info.txt\" file!");
 $my_host = fgets($myfile);
 $my_dbname = fgets($myfile);
 $my_user = fgets($myfile);
 $my_password = fgets($myfile);
 fclose($myfile);
 echo "Real Company inc.";
 echo "<br>";
 echo "<br>";
 $db = pg_connect("host=$my_host dbname=$my_dbname user=$my_user password=$my_password");

 if(!$db) {
     die("Connection failed: " . pg_connect_error());
 }
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $results;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $results = true;
    }
    else {
        $results = false;
    }
    return $results;
}
function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $results;
    if ($pwd !== $pwdRepeat) {
        $results = true;
    }
    else {
        $results = false;
    }
    return $results;
}

function createUser($db, $name, $email, $username, $pwd) {
    
        $name1 = pg_escape_string($db, $name);
        $email1 = pg_escape_string($db, $email);
        $username1 = pg_escape_string($db, $username);
        $pwd1 = pg_escape_string($db, $pwd);

        $hashPass = password_hash($pwd1, PASSWORD_DEFAULT);
      $sql2    = "INSERT INTO users1(userName,userEmail,uName,userPass) VALUES ('$name1','$email1','$username1','$hashPass')";
        $item = pg_query($db, $sql2);
        header("Location: http://localhost/PPCODE/NewIndex.php?error=none");
            exit();
}
function emptyInputLogin($username, $pwd) {
    $results;
    if (empty($username) || empty($pwd)) {
        $results = true;
    }
    else {
        $results = false;
    }
    return $results;
}