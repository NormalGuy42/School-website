<?php
    $type =$title = $presentation = $scolarite = $admission = $structure =$img = '';
    $errors = ['type'=>'','title'=>'','presentation'=>'','scolarite'=>'','admission'=>'','structure'=>'','img'=>''];
    //upload image
    $GLOBALS['imageSource'] = '';
    if(isset($_POST['submit'])){
        //Image upload
        if(isset($_POST['upload'])){
            $imageFile = $_FILES['image'];
            //Extract variables
            $imageName = $_FILES['image']['name'];
            $imageSize = $_FILES['image']['size'];
            $imageTempName = $_FILES['image']['tmp_name'];
            $imageType = $_FILES['image']['type'];
            $imageError = $_FILES['image']['error'];
        
            $imageExtension = explode('.',$imageName);
            $imageActualExt = strtolower(end($imageExtension));
    
            $allowed = array('jpg','jpeg','png','webp','pdf','gif');
            if(in_array($imageActualExt,$allowed)){
                if($imageError === 0){
                    if($imageSize < 5000000){
                        $imageNewName = uniqid('',true).".".$imageActualExt;
                        $imageDestination = '../assets/program/'.$imageNewName;
                        $GLOBALS['imageSource'] = $imageDestination;
                        move_uploaded_file($imageTempName,$imageDestination);
                        // header('Location: add_program.php');
                    }else{
                        echo "Cette image est trop grande!";
                    }
                }else{
                    echo "Une erreur a été produite lors du téléchargement";
                }
            }else{
                echo "Ce fichier n'a pas une extension accepté";
            }
        }

        if(empty($_POST['type'])){
            $errors['type'] = 'Vous devez choisir un type de programme';
        }else{
            $type = $_POST['type'];
        }
        if(empty($_POST['type'])){
            $errors['title'] = 'Vous devez entrer un titre';
        }else{
            $title = $_POST['title'];
        }
        if(empty($_POST['presentation'])){
            $errors['presentation'] = 'Vous devez remplir la partie presentation';
        }else{
            $presentation = $_POST['presentation'];
        }
        if(empty($_POST['scolarite'])){
            $errors['scolarite'] = 'Vous devez remplir la partie scolarite';
        }else{
            $scolarite = $_POST['scolarite'];
        }
        if(empty($_POST['structure'])){
            $errors['structure'] = 'Vous devez remplir la partie structure';
        }else{
            $structure = $_POST['structure'];
        }
        if(empty($_POST['admission'])){
            $errors['admission'] = 'Vous devez remplir la partie admission';
        }else{
            $admission = $_POST['admission'];
        }
        if(empty($GLOBALS['imageSource'])){
            $errors['img'] = 'Vous devez choisir une image';
        }else{
            $img = $GLOBALS['imageSource'];
        }
        print_r($_POST);
    }
    
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
        .close_container{
            position: relative;
            height: 50px;
        }
        svg.close{
            position: absolute;
            right: 5px;
            cursor: pointer;
            height: 50px;
            width: 50px;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2{
            text-align: start;
            width: 80%;
        }
        input,select,textarea{
            max-width: 700px;
            width: 80%;
            min-width: 300px;
            padding: 15px 20px;
            box-sizing: border-box;
            font-size: 17px;
        }
        .img_container{
            background-color: #eee;
            max-width: 700px;
            width: 80%;
            min-width: 300px;
            height: 250px;
            margin-bottom: 20px;
        }
        .img_container img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        button{
            height: 38px;
            background-color: darkblue;
            color: white;
            font-size: 18px;
        }
        input[type="file"] {
            /* display: none; */
            width: 200px;
        }
        .upload{
            background-color: darkblue;
            color: white;
            font-size: 18px;
            padding: 8px;
            cursor: pointer;
        }
        .finish{
            margin: 30px 0;
            cursor: pointer;
        }
        @media (max-width: 600px) {
            .page{
                padding: 12px;
                width: 100%;
            }
        }
    </style>
</head>
    <body>
        <?php include('../templates/admin_header.php')?>
        <div class="page">
            <div class="close_container">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 25 25" onclick="history.back()" class="close">
                    <path fill="currentColor" d="m13.06 12.15 5.02-5.03a.75.75 0 1 0-1.06-1.06L12 11.1 
                    6.62 5.7a.75.75 0 1 0-1.06 1.06l5.38 5.38-5.23 5.23a.75.75 0 1 0 1.06 1.06L12 13.2l4.88 
                    4.87a.75.75 0 1 0 1.06-1.06l-4.88-4.87z">
                    </path>
                </svg>
            </div>
            
            <form action="add_program.php" method="POST" enctype="multipart/form-data" id="">
                <h2>Choissisez le type de programme</h2>
                <select name="type" id="" value="<?php echo htmlspecialchars($type)?>">
                    <option>Type de programme</option>
                    <option value="masters">Masters</option>
                    <option value="licence">Licence</option>
                    <option value="formation">Formation</option>
                    <option value="formation_qualifiante">Formation qualifiante</option>
                </select>
                <div class="error"><?php echo $errors['type']?></div>
                <h2>Titre du programme</h2>
                <input type="text" placeholder="Entrer le titre" name="title" value="<?php echo htmlspecialchars($title)?>">
                <div class="error"><?php echo $errors['type']?></div>
                <h2>Mettre une image</h2>
                    <div class="img_container">
                        <?php if(!$errors['img'] && isset($_POST['upload'])){echo '<img src="$imageSource">';}?>
                    </div>
                    <!-- <button>Envoyer</button> -->
                    <!-- <label for="file-upload" class="upload">
                        Choisir une image
                    </label> -->
                    <input type="file" name="image" id="file-upload" accept="image/*">
                    <button name="upload" value="submit" type="submit">Envoyer</button>
                <div class="error"><?php echo $errors['img']?></div>
                <h2>Présentation du programme</h2>
                <textarea name="presentation" id="" cols="30" rows="10" name="presentation"><?php echo htmlspecialchars($presentation)?></textarea>
                <div class="error"><?php echo $errors['presentation']?></div>
                
                <h2>Structure du programme</h2>
                <textarea name="structure" id="" cols="30" rows="10" name="structure"><?php echo htmlspecialchars($structure)?></textarea>
                <div class="error"><?php echo $errors['structure']?></div>
                
                <h2>Admission</h2>
                <textarea name="admission" id="" cols="30" rows="10" name="admission"><?php echo htmlspecialchars($admission)?></textarea>
                <div class="error"><?php echo $errors['admission']?></div>
                
                <h2>Scolarité</h2>
                <textarea name="scolarite" id="" cols="30" rows="10" name="scolarite"><?php echo htmlspecialchars($scolarite)?></textarea>
                <div class="error"><?php echo $errors['scolarite']?></div>
                
                <button class="finish" name="submit" value="submit">Terminer</button>
            </form>
        </div>
    </section>        
    </body>
</html>