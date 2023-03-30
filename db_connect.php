<?php
    
    $conn = mysqli_connect('localhost','pharmaMartdb','','pharmamartdb');

    if(!$conn){
        echo 'connection error: '.mysqli_connect_error();
    }

?>