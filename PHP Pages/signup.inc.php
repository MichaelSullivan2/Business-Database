<?php 

if (isset($_POST['submit-search'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
 
    require_once 'dbTest1.php';
    require_once 'functions.inc.php';
    
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        
        header("Location: http://localhost/PPCODE/signup.php?error=emptyLogin");
        exit();
    }
    if (invalidUid($username) !== false) {
 
        header("Location: http://localhost/PPCODE/signup.php?error=invalidUsername");
        exit();
    }
    
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
    
        header("Location: http://localhost/PPCODE/signup.php?error=passwordNotMathc");
        exit();

    }
    
    
    createUser($db, $name, $email, $username, $pwd);
    
}
else {

    
    header("Location: http://localhost/PPCODE/signup.php?error=else");
    exit();
}

