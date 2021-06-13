<?php

    session_start();
    function pathTo($destination){
        echo "<script>window.location.href = '/dental_clinic/admin/$destination.php'</script>";
    }

     if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';

        // rEDIRECT TO LOGIN PAGE
            // Set Session to invalid
        $_SESSION['status'] = 'invalid';
        // unset user data
        unset($_SESSION['user_email']);

        // redirect to login page
        pathTo('signin');
        
    }
    
    /*Counting Admin User*/
    function useCount(){
        require 'conn.php';
        $count_user_query = "SELECT user_id FROM users_tbl ORDER BY user_id";
        $count_run = mysqli_query($connection,$count_user_query);

        $row = mysqli_num_rows($count_run);

        echo '<h1>'.$row.'</h1>';
    }

?>