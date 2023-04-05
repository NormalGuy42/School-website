<?php
    //Connect to database
    $conn = "";
    try {
        include('../config/connection.php');
        $conn = new PDO(
            "mysql:host=$servername; dbname=$dbname",
            $username, $password
        );
        
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    //Connect to database end
    //Validate start
    function test_input($data) {
     
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
      
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html{
            height: fit-content;
        }
        body{
            max-height: 100vh;
            width: 100%;
            background-color: #01509d;
        }
        .logo{
            width: 100%;
        }
        img{
            height: 100px;
            width: 100px;
            margin: 50px auto;
            display: block;
        }
        input{
            display: block;
            height: 32px;
            width: 80%;
            max-width: 600px;
            min-width: 200px;
            margin: 0 auto 50px;
            padding: 5px 8px;
            font-size: 20px;
        }
        button{
            display: block;
            height: 46px;
            width: 82%;
            max-width: 620px;
            min-width: 200px;
            border: none;
            background-color: #076dd1;
            color: white;
            font-size: 20px;
            margin: 0 auto;
            padding: 5px 8px;
            cursor: pointer;
        }
        .error{
            color: red;
            background-color: white;
            position: relative;
            width: fit-content;
            padding: 8px;
            box-shadow: 0 0 2px 2px rgb(0,0,0,15%);
            border-radius: 5px;
            font-weight: bold;
            top: 50px;
            font-family: arial;
            margin: 0 auto;
        }
        @media (max-width:400px) {
            .error{
                width: 300px;
            }
        }
    </style>
</head>
<body>
    <?php
        $error ="";
        session_start();
        $_SESSION['isLogged'] = false;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = test_input($_POST["username"]);
            $password = test_input($_POST["password"]);
            $stmt = $conn->prepare("SELECT * FROM admin_login");
            $stmt->execute();
            $users = $stmt->fetchAll();
             
            foreach($users as $user) {
                if(($user['username'] == $username) &&
                    ($user['password'] == $password)) {
                        header("location: admin.php");
                        $_SESSION['isLogged'] = true;
                }
                else{
                    $error = '<div class="error">Mot de Passe ou Identifiant incorrect. Réesayez!</div>';
                }
            }
        }
        
    ?>
    <?php echo $error?>
    <div class="logo">
        <img src="../assets/ecolebahkane.jpeg">
    </div>
    <form action="index.php" method="POST">
        <div>
            <input type="text" placeholder="Identifiant" name="username" autocomplete="off">
            <input type="password" placeholder="Mot de passe" name="password" autocomplete="off">
            <button value="submit" name="submit">Se connecter</button>
        </div>
    </form>
</body>
</html>