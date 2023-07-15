<?php
       $db_host = "localhost";
       $db_name = "cms";
       $db_user = "cms_www";
       $db_pass = "MyNewPass";
        $conn = mysqli_connect($db_host, $db_name, $db_user, $db_pass);
        if (mysqli_connect_error()) 
        {
            echo mysqli_connect_error();
            exit;
        }

        echo "conn sucess!! Hurray";
        