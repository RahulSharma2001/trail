<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="css/upload.css">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<center><img src="image/up.png" width="300px" height="300px"></center><br>
<center> <label><b>Select pic</label>
    <input type="file"  name="images" ></center><br>
<center><button type="submit" name="signup">CLICK TO UPLOAD </button></center>
   <br>

      <center> <button type="submit" class="cancelbtn"><strong><a href="new_feed.php">Check Feed</a> </strong></button></center>
        <h2 style="color: #00fafa;text-align: right"><strong><a href="available.html">Go BACK..</a> </strong>
<?php
include ("upload_img.php")
?>
</form>
</body>
</html>