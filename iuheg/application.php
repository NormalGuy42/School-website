<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'admission</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <style>
        select,input{
            display: block;
            padding: 12px 20px;
            box-sizing: border-box;
            font-size: 18px;
            width: 70% ;
            min-width: 300px;
            max-width: 700px;
            margin: 0 auto 12px;
        }
        .step h1{
            text-transform: capitalize;
            font-size: 32px;
            color: #1944c3;
            margin-top: 20px;
        }
        .step p {
            margin: 8px 20px;
        }
        .step .pic_grid{
            display: grid;
            grid-template-columns: repeat(2,150px);
            justify-content: center;
        }
        .step .pic_grid .container{
            height: 120px;
            background-color: #eee;
            border: 1px solid #747474;
        }
        .step .pic_grid .container img{
            object-fit: cover;
        }
        .step button{
            height: 40px;
            width: 120px;
            color: white;
            background-color: darkblue;
            border-color: blue;
            margin: 20px auto;
            display: block;
            font-size: 18px;
        }
        /*box start*/
        .step .box_grid{
            display: flex;
            flex-direction: column;
        }
        .step .box_grid .box{
            background-color: #eee;
            display: flex;
            justify-content: space-between;
            align-items:  center;
            width: 80%;
            min-width: 300px;
            max-width: 800px;
            margin: 0 auto;
            border-radius: 5px;
            box-shadow: 0 0 2px 2px rgb(0,0,0,15%);
        }
        .step .box h3{
            margin-left: 20px
        }
        .step .box_grid .box .buttons{
            display: flex;
            align-items: center;
        }
        .step .box_grid .box button{
            background-color: transparent;
            border: none;
            color: black;
            font-size: 40px;
            cursor: pointer;
            width: 50px;
            height: 100%;
        }
        .step svg{
            height: 30px;
            width: 30px;
        }
        /*box end*/
    </style>
</head>
<body>
    <!-- header start   -->
    <?php include('../templates/iuheg_header.php')?>
    <!-- header end -->
    <section>
        <div class="step">
            <h1>étape 1</h1>
            <p>Remplissez le formulaire</p>
            <input type="text" placeholder="Nom">
            <input type="text" placeholder="Prénom">
            <select name="" id="program_type">
                <option>Type de programme</option>
                <option>Licence</option>
                <option>Masters</option>
                <option>Formation professionelle</option>
            </select>
            <select name="" id="program_name">
                <option>Choisissez le programme</option>
                <optgroup>
                    <option></option>
                </optgroup>
            </select>
        </div>
        <div class="step">
            <h1>étape 2</h1>
            <p>Envoyez vos photos</p>
            <div class="pic_grid">
                <div class="container"></div>
                <div class="container"></div>
                <div class="container"></div>
                <div class="container"></div>
            </div>
            <button>Envoyez</button>
        </div>
        <div class="step">
            <h1>étape 3</h1>
            <p>Envoyez vos documents</p>
            <div class="box_grid">
                <div class="box">
                    <h3>Extrait de naissance</h3>
                    <div class="buttons">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com 
                                License - https://fontawesome.com/license (Commercial License) Copyright 2023 
                                Fonticons, Inc. -->
                                <path d="M246.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 
                                45.3s32.8 12.5 45.3 0L192 109.3V320c0 17.7 14.3 32 32 32s32-14.3 32-32V109.3l73.4 
                                73.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-128-128zM64 352c0-17.7-14.3-32-32-32s-32 
                                14.3-32 32v64c0 53 43 96 96 96H352c53 0 96-43 96-96V352c0-17.7-14.3-32-32-32s-32 
                                14.3-32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V352z"/>
                            </svg>
                        </button>
                        <button>
                            &#8942;
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="step">
            <h1>étape 4</h1>
            <p>Finalisation de la demande</p>
            <button>Tout envoyer</button>
        </div>
    </section>
    <script>
        var programType = document.querySelector('#program_type');
    </script>
</body>
</html>