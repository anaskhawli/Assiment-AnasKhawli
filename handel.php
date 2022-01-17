<?php 
$username=$_POST['first-name'];
$lastname=$_POST['last-name'];
$Emailuser=$_POST['email-mobile'];
$userpass=$_POST['up-password'];
$userdate=$_POST['date'];
$usergen=$_POST['gen'];
$username=$_POST['register'];

if(isset($_POST['register'])){
echo '<pre>';
print_r($_POST);
echo '</pre>';
}else {
    echo "error 404";
}
?>