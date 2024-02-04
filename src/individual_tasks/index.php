<?php
    session_start();
    include "connection.php";
    include "query.php";
    
    if(isset($_POST['form-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $match = connect_and_query(query_command::query_account($username, $password));
        
        if ($match->num_rows > 0 && !isset($_COOKIE['username'])) {
            setcookie("username", $username, time() + 10, "/");
        }
    }