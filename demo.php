<?php
$username=$_POST["username"];
$pass=$_POST["password"];
$pass1="bn123";

    if(!empty($username)){
        
if(!empty($pass)){
        if($username=="archana"){
        if($pass==$pass1){
        include_once ('hostel.html');
        }
        else{
            echo "incorrect password";
        }
    }
    else{
        echo "incorrect user name";
    }
}
    else{
        echo "<h3>  please enter the correct  password!!!...</h3>";
    }
}
    else{
        echo "<h3>please enter the details!!...</h3>";
    }

?>
