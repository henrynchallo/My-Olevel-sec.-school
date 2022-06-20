<?php
$name=$_POST['name'];
$yoe=$_POST['yoe'];
$yog=$_POST['yog'];
$fteacher=$_POST['fteacher'];
$dv1=$_POST['dv1'];
$dv2=$_POST['dv2'];
$occ=$_POST['occ'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email']; $conn=new mysqli('localhost','root','','alumni');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name, yoe, yog, fteacher, dv1, dv2, occ, phonenumber, email)"
                          values(?, ?, ?, ?, ?, ?, ?, ?, ?));
    $stmt->bind_param("sssssssis", $name, $yoe, $yog, $fteacher, $dv1, $dv2, $occ, $phonenumber, $email);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}

?>