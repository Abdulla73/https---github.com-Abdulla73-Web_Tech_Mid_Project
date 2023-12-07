<?php  

    function getConnection(){
    $server="localhost";
    $username="root";
    $password="";
    $dbname="final";
    $conn=new mysqli($server,$username,$password,$dbname);
    return $conn;
    }

?>