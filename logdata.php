<?php
if( isset($_POST['submit'])){
$conn = mysqli_connect('localhost','root','','data')  ;
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO `employee`(`Email`, `Password`) VALUES ('$email','$password')";
$query=mysqli_query($conn, $sql);
if($query){
    echo "Entry Success";
}else{
    echo "Unsuccess";
}
mysqli_close($conn);
}
}
?>