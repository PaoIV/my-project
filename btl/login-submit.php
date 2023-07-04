<?php
    if(isset ($_POST['submit']))
    {
        echo("ope");
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql="seclect * from user where username ={$username}";
        if($username == 'username' && $password == 'password')
        {
            header("location:logout.php");
        }
        else{
            header("location:login.php");
        }
    }


?>