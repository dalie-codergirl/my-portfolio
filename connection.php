<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "my_portfolio";
        $connection = mysqli_connect($servername,$username,$password,$dbname);
        if(!$connection){
            echo "no connection";
        }else{
            echo "connected succefully";
        }
        ?>