<?php
$con=mysqli_connect('localhost','root','');

if(!$con)
{
    echo "Not Connect to server ";
}

elseif(!mysqli_select_db($con,'mychat'))
{
    echo "Data not Connected ";
}


if(isset($_POST['signup'])) {
    $file = addslashes(file_get_contents($_FILES["images"]["tmp_name"]));
    $query = "INSERT INTO images(pic) VALUES ('$file')";
    if (mysqli_query($con, $query)) {
        echo '<script>alert("Successfully inserted image")</script>';
    }
}
?>