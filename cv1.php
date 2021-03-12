<?php
$w="old";
echo ($w.'tree');
?>
<?php

$name=$_POST['name'];
$birth=$_POST['birth'];
$nationality=$_POST['nationality'];
$military=$_POST['military'];
$driving=$_POST['driving'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$image=$_POST['image'];
$connection=mysqli_connect('localhost','root','','cv');
if($connection->connect_error)
{echo "error";}
else
{
    $query="INSERT INTO `cv` (`name`,`birth`,`nationality`,`military`,`driving`,`address`,`telephone`,`email`,`image`) VALUES ('".$name."','".$birth."','".$nationality."','".$military."','".$driving."','".$address."','".$telephone."','".$email."','".$image."')";
    $list=mysqli_query($connection,$query);
    if($list){echo "updated";}else{echo"failed";}}
?>