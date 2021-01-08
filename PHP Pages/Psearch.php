<?php
include 'Pheader.php';
?>
<div id="main">
<h1> Search Page <input id ="reset" action="action" onclick="window.history.go(-1); return false;" type="submit" value="Home" /> </h1>
</div>

<div class="article-container">
<html>



    <head>
    <style>
        th
        {
        text-align: center; 
        vertical-align: middle;
        }
        td 
        {
        text-align: center; 
        vertical-align: middle;
        }
    </style>
    </head>
    <?php
    if (isset($_POST['submit-search'])) {
        $search = pg_escape_string($db, $_POST['search']);
        $sql = "Select emp_no, first_name, last_name
        from
        employees
        where
        first_name ILIKE  '$search%' OR last_name ILIKE '$search%' 
        order by
        emp_no";
        $result = pg_query($db, $sql);
        $queryResult = pg_num_rows($result);
        
        echo "There are ".$queryResult." result(s).";
        if ($queryResult > 0) {
            while ($row = pg_fetch_assoc($result)) {
                echo "<a href='Particle.php?title=".$row['emp_no']."&name=".$row['first_name'].".'><div class='article-box'>
            <h3>".$row['first_name']." ".$row['last_name']." ".$row['emp_no']."</h3>
            
            </div></a>";
            }
        } else {
            echo "No valid results";
        }
        
    }
    ?>
    

