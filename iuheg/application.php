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
            height: 30px;
            width: 100px;
            color: white;
            background-color: darkblue;
            border-color: blue;
            margin: 20px auto;
            display: block;
        }
        /*box start*/

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
            </div>
        </div>
        <div class="step">
            <h1>étape 4</h1>
            <p></p>
        </div>
    </section>
    <script>
        var programType = document.querySelector('#program_type');
    </script>
</body>
</html>