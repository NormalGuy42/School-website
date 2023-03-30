<?php 
    $id = $password = '';
    $errors = ['id' =>'','password'=>''];
    if(isset($_POST['submit'])){
        //Check id
        if(empty($_POST['id'])){
            $id = $_POST['id'];
            $errors['id'] = 'Vous devez entrer un identifiant';
        }
        //Check id
        if(empty($_POST['password'])){
            $password = $_POST['password'];
            $errors['password'] = 'Vous devez entrer un identifiant';
        }
        //If the id and password are correct
        if(!array_filter($errors)){
            header('Location: admin.php');
        }
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
            height: 100vh;
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
    </style>
</head>
<body>
    <div class="logo">
        <img src="../assets/ecolebahkane.jpeg">
    </div>
    <form action="index.php" method="POST">
        <div>
            <input type="text" placeholder="Identifiant" name="id" value="<?php echo htmlspecialchars($id)?>">
            <div class="error"><?php echo htmlspecialchars($errors['id'])?></div>
            <input type="password" placeholder="Mot de passe" name="password" value="<?php echo htmlspecialchars($password)?>">
            <div class="error"><?php echo htmlspecialchars($errors['password'])?></div>
            <button value="submit" name="submit">Se connecter</button>
        </div>
    </form>
</body>
</html>