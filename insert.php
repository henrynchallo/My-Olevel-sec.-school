<?php
$name=$_POST['name'];
$yoe=$_POST['yoe'];
$yog=$_POST['yog'];
$fteacher=$_POST['fteacher'];
$dv1=$_POST['dv1'];
$dv2=$_POST['dv2'];
$occ=$_POST['occ'];
$cv=$_POST['cv'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
if(!empty ($name)|| !($yoe)|| !($yog)|| !($fteacher)|| !($dv1)|| !($dv2)|| !($occ)|| !($cv )|| !($phonenumber)|| !($email)){
    $host="local host";
    $dbname="";
    $dbyoe="";
    $dbyog="";
    $dbfteacher="";
    $dbdv1="";
    $dbdv2="";
    $dbocc="";
    $dbcv="";
    $dbphonenumber="";
    $dbemail="";
    $dbname="alumni"
    $conn=new mysqli($host, $dbname, $dbyoe, $dbyog, $dbfteacher, $dbdv1, $dbdv2, $dbocc, $dbcv, $dbphonenumber, $dbemail, $dbname)
}else{
    echo "All fields are required";
    die();
}
?>