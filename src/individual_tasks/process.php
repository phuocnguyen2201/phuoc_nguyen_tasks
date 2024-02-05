<?php 
    if(isset($_POST['submit']))
    {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $group = $_POST['groupid'];
        
        $query = "INSERT into studentsinfo (first_name, last_name, groupId, city) values ('$fname', '$lname', '$group', '$city')";
        
        $result = connect_and_query($query);
        
    }
    
?>