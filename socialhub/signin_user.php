<?php
session_start();
$con=mysqli_connect('localhost','root','');
if(!$con)
{
    echo "Not Connect to server ";
}
if(!mysqli_select_db($con,'mychat'))
{
    echo "Data not Connected ";
}
$link = mysqli_connect("localhost",
    "root", "", "mychat");
if (isset($_POST['sign_in'])){
    $mail= $_POST['uname'];
    $pass= $_POST['psw'];
    $id=$_POST['uname'];
    $select="select * from users where Email='$mail' AND Password='$pass'";
    $query = mysqli_query($con,$select);
    $check_user = mysqli_num_rows($query);
    $query="INSERT INTO chats(uname) VALUES ('$mail')";
    if (mysqli_query($con,$query))
    {
        echo '<script>alert("Successfully inserted image")</script>';
    }
    if($check_user==1){
        $_SESSION['Email']=$mail;

        $update_msg = mysqli_query($con,"UPDATE users SET sign_in='online' where Email='$mail'");

        $user = $_SESSION['Email'];
        $get_user="select * from users where Email='$mail'";
        $run_user=mysqli_query($con,$get_user);
        $row = mysqli_fetch_array($run_user);

        $user_name=$row['First_name'];
        echo "<script>window.open('home.php?First_name=$user_name','_self')</script>";

    }
    else{
        echo "<div class='alert alert-danger'><strong>Check your Email and Password.</strong></div>";
    }
}

?>