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
        button{
            height: 38px;
            background-color: darkblue;
            color: white;
            font-size: 18px;
        }
        .finish{
            margin: 30px 0;
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
            
            <form action="add_program.php" method="POST" id="">
                <h2>Choissisez le type de programme</h2>
                <select name="program_type" id="">
                    <option value="masters">Masters</option>
                    <option value="licence">Licence</option>
                    <option value="formation">Formation</option>
                    <option value="formation_qualifiante">Formation qualifiante</option>
                </select>
                <h2>Titre du programme</h2>
                <input type="text" placeholder="Entrer le titre">
                <h2>Mettre une image</h2>
                    <div class="img_container">
                    </div>
                    <button>Envoyer</button>
                <h2>Présentation du programme</h2>
                <textarea name="presentation" id="" cols="30" rows="10"></textarea>
                <h2>Structure du programme</h2>
                <textarea name="structure" id="" cols="30" rows="10"></textarea>
                <h2>Admission</h2>
                <textarea name="admision" id="" cols="30" rows="10"></textarea>
                <h2>Scolarité</h2>
                <textarea name="scolarite" id="" cols="30" rows="10"></textarea>
                <button class="finish">Terminer</button>
            </form>
        </div>
    </section>        
    </body>
</html>