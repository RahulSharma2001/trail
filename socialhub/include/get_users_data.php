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
$user="select * from users";
$run_user=mysqli_query($con,$user);
while ($row_user=mysqli_fetch_array($run_user)){
    $user_id=$row_user['user_id'];
    $user_name=$row_user['First_name'];
    $user_profile=$row_user['Profile'];
    $login=$row_user['sign_in'];

    echo"
    <li>
        <div class='chat-left-img'>
        <img src='$user_profile'>
            
        </div>
        <div class='chat-left-details'>
             <p><a href='home.php?user_name=$user_name>$user_name</a></p>";
            if($login=="online"){
                    echo "<span><i class='fa fa-circle' aria-hidden='true'></i>online</span>";
                }
            else{
                    echo "<span><i class='fa fa-circle-o' aria-hidden='true'></i>offline</span>";
                }
            "
        </div>
        

    </li>
    ";


}
?>