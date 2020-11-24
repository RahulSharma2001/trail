<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Feeds</title>
</head>
<body style="margin: 15px 15px 15px 15px; background-color: hotpink">
<h3 style="text-align: right;font-family: 'Times New Roman'"><a href="available.html"><strong>Go back to FEATURES</strong></a></h3>
<h1 style="text-align: center;font-family: Algeria "><strong>NEW FEEDS</strong></h1>

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
$res=mysqli_query($con,"select * from images");
while($row=mysqli_fetch_array($res))
{
    echo '<center><img src="data:image;base64,'.base64_encode($row['pic'] ).'" height="300" width="300"/></center><br>';

}
mysqli_close($con);
?>

</body>
</html>