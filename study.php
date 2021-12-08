<?php
    $localhost="localhost";
    $username="root";
    $password="";
    //create connection
    $conn=new mysqli($localhost,$username,$password);
    //check connection
    $conn = new mysqli($servername, $username, $password);
    /* Check connection */
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    /* Create database */
    $sql = "CREATE DATABASE software";
    if ($conn->query($sql) === TRUE) {
        echo "Database admin created successfully";
    }
    else
    {
        echo "Error creating database: " . $conn->error;
    }

    $sql1="create table app(id int not null auto_increament,name varchar(20),startdate datetime(29),description varchar(30),PRIMARY KEY(ID)";
    if($conn->query($sql1)=== TRUE){
        echo"Table created successfully";
    }
    else{
        echo"error detected".$conn->error;
    }
    $conn->close();
    }
?> 