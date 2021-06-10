<?php
    session_start();

    function pathTo($destination){
        echo "<script>window.location.href = '/dental_clinic/admin/$destination.php'</script>";
    }

    // Set Session to invalid
    $_SESSION['status'] = 'invalid';
    // unset user data
    unset($_SESSION['user_email']);

    // redirect to login page
    pathTo('signin');

?>