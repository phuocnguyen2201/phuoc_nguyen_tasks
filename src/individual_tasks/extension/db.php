<?php 

function connect_and_query($query){
    try{
        $conn = mysqli_connect("host.docker.internal", "root", "password", "crud_app","6034");

        if(mysqli_connect_error()){
            echo mysqli_connect_error();
            die("");
        }
        if($conn->connect_error){
            die($conn->connect_error);
        }
        if($conn->query($query) === true)
            echo "done";
        else{
            echo "Error: " . $conn->error;
        }
    }
    catch (Exception $e){
        echo $e->getMessage();
    }
    finally{
        $conn->close();
    }
}
  
?>