<?php 

if (isset($_POST['submit-search'])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $empID = $_POST['empId'];

    require_once 'dbTest1.php';
    require_once 'functions.inc.php';
        $result1 = pg_query("SELECT uname, userpass FROM users1 WHERE uname = '$username' AND  userpass = '$pwd'");
        $result2 = pg_query("SELECT emp_no FROM employees WHERE emp_no = '$empID'");
        
        if(pg_num_rows($result2) == 0) 
        {
            header("Location: http://localhost/PPCODE/login.php?error=invalidID");
            exit();
        }
        if(pg_num_rows($result1) > 0 )
        { 
            $_SESSION["userid"] = true; 
            header("Location: http://localhost/PPCODE/Pindex.php");
        }
        else
        {
            echo 'The username or password are incorrect!';
            header("Location: http://localhost/PPCODE/login.php?error=wronglogin");
            exit();
        }
        
}
