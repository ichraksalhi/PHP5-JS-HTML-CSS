<?php

    echo "welcome";
    session_start();
       $_SESSION['admin']= 1  ;
       	 header('Location: index.html');
?>

