<?php
    //Connect to database
    $db = mysqli_connect('localhost','admin','200410','iuheg');
    //Check connection
    if(!$db){
        echo 'Connection error '.mysqli_connect_error();
    }
    //Write query for all blogs
    $sql = 'SELECT * FROM messages';
    // make query and get result
    $result = mysqli_query($db,$sql);
    //fetch the resulting rows as an array
    $data = mysqli_query($db,$sql);
    //Free result from memory
    mysqli_free_result($result);
    //Close connection
    mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="stylesheet" href="admin_style.css">
    <script src="admin_script.js" defer></script>
</head>
<body>
    <?php include('templates/admin_header.php')?>
</body>
</html>