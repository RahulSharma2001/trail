<?php

$con=mysqli_connect('localhost','root','');
if(!$con)
{
    echo "Not Connect to server ";
}
if(!mysqli_select_db($con,'mychat'))
{
    echo "Data not Connected ";
}


    if(isset($_POST['sign_up']))
    {
        $name= $_POST['fname'];
        $lname= $_POST['lname'];
        $mail= $_POST['uname'];
        $pass= $_POST['psw'];

        $contact= $_POST['cont'];
        $date= $_POST['dob'];
        $gender=$_POST['gen1'];
        $country= $_POST['country'];



        $insert="insert into users (First_name,Last_name,Email,Password,Contact,DOB,Gender,Country) values ('$name',
'$lname','$mail','$pass',' $contact','$date','$gender','$country')";
        $query=mysqli_query($con,$insert);

        if ($query){
            echo"<script>alert('Congratulations $name, Your account has been created successfully')";
            echo "<script>window.open('sign_in.php','_self')</script>";
        }
        else{
            echo"<script>alert('Registration failed, Try again')";
            echo "<script>window.open('sign_up.php','_self')</script>";
        }
    }
?>