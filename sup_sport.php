<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" >
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delete Sport</title>
  
</head>
<body>
<?php 


if(isset($_POST['deletebn'])){

    include "config.php";
    $spr_id = $_POST['sid'];
    
    $sql = "DELETE FROM personsport WHERE sid = {$spr_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    
    header("Location: http://localhost/miniprojet/admin.php");
    
    mysqli_close($conn);
    
    }
    ?>


<div id="main-content">
    <div id="show">
    <h2>Delete Sport :</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label style="font-family: sans-serif;">Id :</label><br>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebn" value="Delete" />
    </form>
</div>
</div>
</div>
</body>
</html>
