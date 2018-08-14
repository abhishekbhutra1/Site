<?php
session_start();
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("connection.php");
    if($con)
    {
        $a=array();
        $folderpath=$_SESSION['folderpath']."/";
        $foldername=$_POST['foldername'];
        $folderpath=$folderpath.$foldername;
        if(is_dir($folderpath))
        {
            $resource=opendir($folderpath);
            while(($entry=readdir($resource))!==FALSE) {
                if ($entry != "." && $entry != "..") {
                    array_push($a, $folderpath."/".$entry);
                }
            }
            $data['result']=$a;
            echo json_encode($data);
            exit;
        }
    }
}
?>