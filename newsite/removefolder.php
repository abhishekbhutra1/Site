<?php
error_reporting(0);
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("connection.php");
    if($con)
    {
        $foldername=$_POST['delfolder'];
        //echo $foldername;
        $user = $_SESSION['name'];
        //echo $user;
        $folderpath="userlogs/".$user."/".$foldername;
        //echo $folderpath;
        if($foldername!="")
        {
            if(is_dir($folderpath))
            {
                echo $folderpath;
                removefolder($folderpath);
                echo "Folder deleted successfully";
            }
            else
            {
                echo "FOLDER DOES NOT EXIST";
            }
        }
    }
}
function removefolder($folder){
    if(is_dir($folder)){
        $foldercontents=scandir($folder);
        $a=array('.','..');
        $foldercontents=array_diff($foldercontents,$a);
        foreach ($foldercontents as $contents =>$contentName)
        {
            //print_r($contentName);
            $currentpath=$folder.'/'.$contentName;
            unlink($currentpath);
        }
        rmdir($folder);
    }
}
?>