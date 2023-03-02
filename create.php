<?php
    class database
    {
        public function createdb()
        {
            $con=mysqli_connect("localhost","root","","");
            $db="CREATE DATABASE `frooti`";
            $res=mysqli_query($con,$db);
        }
    }
     $obj=new database;
    $obj->createdb();
?>