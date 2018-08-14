<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("connection.php");
     if($con)
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['emailid'];
        $phno=$_REQUEST['phone'];
        $confirm_pass=$_REQUEST['confirmpass'];
        $pass=$_REQUEST['password'];
        $dir="userlogs/";
        $pathname=$dir.$name;
        $_SESSION['folderpath']=$pathname;
        if(mkdir($pathname))
        {
            $sql = "INSERT INTO signin(name,emailid,phone,password,dirpath) VALUES('$name','$email',$phno,'$pass','$pathname')";
            mysqli_query($con, $sql);
            echo "data entered succesfully";
        }
        $_SESSION['name']=$name;
        header('location:workpage123.php');
    }
        else
            echo "connection not established";
}
?>

