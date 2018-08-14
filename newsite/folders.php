<?php
session_start();
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("connection.php");
    if($con) {
//$filename=$_FILES["uploadfile"]["name"];//states about the file name to be uploaded.
//$tempname=$_FILES["uploadfile"]["tmp_name"];//temporary name given to the file name.
//echo $filename;
        /*$folder="images/".$filename;//appends the file name to the directory name.
        //echo ($folder);echos the file name appended to the folder name
        move_uploaded_file($tempname,$folder);//uploads the file to the folder
        echo "<img src='$folder' height='100' width='100'/>";// displays the image.
        */
        $foldername = $_POST['foldername'];
        $user = $_SESSION['name'];
        $folderpath = "userlogs/" . $user . "/" . $foldername;
        mkdir($folderpath);
        //$_SESSION['folderpath']=$folderpath;
    }
}
?>