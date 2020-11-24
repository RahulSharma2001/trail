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
?>