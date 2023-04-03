<?php
    //Connect to database
    $db = mysqli_connect('localhost','admin','200410','iuheg');
    //Check connection
    if(!$db){
        echo 'Connection error '.mysqli_connect_error();
    }
    //Write query for all blogs
    $sql = 'SELECT * FROM admin_login';
    // make query and get result
    $result = mysqli_query($db,$sql);
    //fetch the resulting rows as an array
    $admins = mysqli_query($db,$sql);
    //Free result from memory
    mysqli_free_result($result);


    //Form
    $success = false;
    $username = $password = '';
    $errors = ['username'=>'','password'=>''];
    if(isset($_POST['submit'])){
        if(empty($_POST['username'])){
            $errors['username'] = 'Vous devez entrer un identifiant';
        }else{
            $username = $_POST['username'];
        }
        if(empty($_POST['password'])){
            $errors['password'] = 'Vous devez entrer un mot de passe';
        }else{
            $password = $_POST['password'];
        }
        if(!array_filter($errors)){
            $username = mysqli_real_escape_string($db,$_POST['username']);
            $password = mysqli_real_escape_string($db,$_POST['password']);
            $sql = "INSERT INTO admin_login(username, password) VALUES('$username','$password')";

            if(mysqli_query($db,$sql)){
                header('Location: settings.php');
            }else{
                $success = false;
            }

        }
    }
    if(isset($_GET['delete'])){
        $deleteID = mysqli_real_escape_string($db,$_GET['adminID']);
        $sql = "DELETE FROM admin_login WHERE id = $deleteID";
        mysqli_query($db,$sql);
        header('Location: settings.php');
    }
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
    <style>
        .show{
            display: flex !important;
        }
        .error_box{
            color: red;
            padding: 12px;
            font-size: 18px;
            box-shadow: 0 0 2px 2px rgb(0,0,0,15%);
            border: 5px;
            width: 220px;
            margin: 0 auto;
            text-align: center;
        }
        table{
            width: 100%;
            max-width: 1000px;
            min-width: 300px;
            border-collapse: collapse;
            border: 2px solid black;
            margin: 0 auto;
            text-align: center;
        }
        th{
            color: white;
            background-color: darkblue;
            border: 2px solid black;
            padding: 8px;
        }
        tr,td{
            border: 2px solid black;
            padding: 8px;
        }
        td{
            font-size: 18px;
        }
        .ellipsis svg{
            height: 30px;
            width: 30px;
            fill: red;
            cursor: pointer;
            margin: 0;
        }
        .content .add_user{
            position: absolute;
            display: none;
            flex-direction: column;
            box-shadow: 0 0 2px 2px rgb(0, 0, 0,15%);
            padding: 10px;
            background-color: white;
            right: 25px;
            top: 220px;
        }
        .add_user input{
            margin-bottom: 10px;
            padding: 5px;
            box-sizing: border-box;
        }
        .add_user button{
            height: 29px;
        }
        .error{
            color: red;
        }
        @media (max-width:800px){
            .page{
                width: 100%;
                box-sizing: border-box;
                padding: 10px;
            }
        }
        @media(max-width:400px){
            td{
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <?php include('../templates/admin_header.php')?>
    <div class="page">
        <h1 class="title">Admin</h1>
        <div class="content">
            <?php if(isset($_POST['submit']) && !$success){
                echo '<div class="error_box">
                <label for="">Erreur!</label>
            </div>';}?>
            <div class="header">
                <h2>Liste</h2>
                <div class="data_add">
                    +
                </div>
                <form action="settings.php" method="post" class="add_user">
                    <input type="text" placeholder="utilisateur" name="username" value="<?php echo htmlspecialchars($username)?>">
                    <div class="error"><?php echo htmlspecialchars($errors['username'])?></div>
                    <input type="text" placeholder="mot de passe" name="password" value="<?php echo htmlspecialchars($password)?>">
                    <div class="error"><?php echo htmlspecialchars($errors['password'])?></div>
                    <button name="submit" value="submit">Terminer</button>
                </form>
            </div>
            <table>
                <thead>
                    <th>Nom d'utilisateur</th>
                    <th>Mot de Passe</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach($admins as $admin){?>
                        <tr>
                            <td><?php echo htmlspecialchars($admin['username'])?></td>
                            <td><?php echo htmlspecialchars($admin['password'])?></td>
                            <td class="ellipsis">
                                <form action="settings.php" method="GET" class="form_delete">
                                    <input type="hidden" name="adminID" value="<?php echo $admin['id']?>">
                                    <button value="submit" name="delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License -
                                            https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 
                                            32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 
                                            17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
    </div>
</body>
<script defer>
    var add = document.querySelector('.data_add');
    add.addEventListener('click',()=>{
        add.nextElementSibling.classList.toggle('show');
    })
    document.addEventListener('click',(e)=>{
        if(!e.target.closest('.data_add') && add.nextElementSibling.classList.contains('show')){
            if(!e.target.closest('form')){
                add.nextElementSibling.classList.remove('show')
            }
        }
    })
</script>
</html>