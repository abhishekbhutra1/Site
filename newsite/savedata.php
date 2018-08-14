<?php
session_start();
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include ("connection.php");
    if($con)
    {
        $foldername=$_POST['foldername'];
        $filename=$_FILES['uploadfile']['name'];
        $tempname=$_FILES['uploadfile']['tmp_name'];
        //$folder=$_SESSION['folderpath'];
        $user = $_SESSION['name'];
        $foldername="userlogs/".$user."/".$foldername;
        echo $foldername;
        if(is_dir($foldername))
        {
            $folder=$foldername."/".$filename;
            move_uploaded_file($tempname,$folder);
            //echo "<img src='$foldername' height='100' width='100'/>";
        }
        else
        {
            echo"Folder does not exists";
        }
        /*$foldername=$_SESSION['path'];
        $saving=$foldername.'/'.$filename;
        echo $saving;*/
    }
}
?>