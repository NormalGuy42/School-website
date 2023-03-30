<?php 
    $name = $message = $email = $objet = '';
    $errors = array('name' =>'','email' =>'','objet'=>'','message'=>'');

    if(isset($_POST['submit'])){
        //Check name
        if(empty($_POST['name'])){
            $errors['name'] = 'Entrez votre nom'; 
        }else{
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
                $errors['name'] = 'Votre prénom doit uniquement contenir des lettres';
            }
        }
        //Check objet
        if(empty($_POST['objet'])){
            $errors['objet'] = 'Entrez l\'objet de votre message'; 
        }else{
            $objet = $_POST['objet'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$objet)){
                $errors['objet'] = 'Cette boite doit uniquement contenir des lettres';
            }
        }
        //Check email
        if(empty($_POST['email'])){
            $errors['email'] = 'Entrez votre email'; 
        }else{
            $email = $_POST['email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Votre email doit être une adresse email valide';
            }
        }
        //Check message
        if(empty($_POST['message'])){
            $errors['message'] = 'Entrez un message'; 
        }else{
            $message = $_POST['message'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoles Bah-Kane</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        /*Header start*/
        .presentation{
            height: 600px;
            animation: slide 15s infinite;
        }
        /*image carousel start*/
        .carousel_container{
            height: 100%;
            overflow: hidden;
        }
        .carousel{
            height: 100%;
            width: 400%;
            position: relative;
            left: 0;
            animation: slide 20s infinite;
        }
        .carousel img{
            height: 100%;
            width: 25%;
            object-fit: cover;
            object-position: top right;
            float: left;
        }
        @keyframes slide {
            0%{
                left: 0;
            }
            20%{
                left: 0;
            }
            30%{
                left: -100%;
            }
            50%{
                left: -100%;
            }
            60%{
                left: -200%;
            }
            80%{
                left: -200%;
            }
            90%{
                left: -300%;
            }
            100%{
                left: -300%;
            }
        }
        /*Image carousel end*/
        .presentation .card{
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(48 45 45 / 63%);
            width: 100%;
            color: white;
            text-align: center;
        }
        .presentation h2{
            font-size: 65px;
        }
        .header_content{
            position: relative;
            top: -600px;
        }
        /*Header end*/
        /*Content start*/
        .content{
            text-align: center;
            padding: 20px;
        }
        .content h1{
            margin: 10px 0 20px;
            font-size: 28px;
            color: var(--title-blue);
        }
        .content p{
            line-height: 22px;
            letter-spacing: 0.03rem;
            font-size: 18px;
            padding: 15px;
        }
        /*Content grid start*/
        .content_grid{
            display: grid;
            grid-template-columns: repeat(auto-fit,280px);
            justify-content: center;
            gap: 20px;
            margin: 30px auto;
        }
        .content .content_grid .box{
            background-color: #eb2a2a;
            color: white;
            padding: 30px;
        } 
        .content .content_grid .box svg{
            fill:white;
            height: 80px;
            width: 80px;
        }
        /*Content grid end*/
        /*Programmes start*/
        .program_grid{
            display: grid;
            grid-template-columns: repeat(auto-fit,300px);
            justify-content: space-around;
            margin: 40px auto;
            gap: 40px;
        }
        .program_box{
            height: 380px;
            background-color: #1e70b9d9;
            color: white;
        }
        .program_box img{
            height: 100px;
            width: 100px;
            object-fit: contain;
        }
        .program_box p{
            max-height: 138px;
            overflow: hidden;
            text-align: center !important;
        }
        .program_box a{
            color:inherit;
            text-decoration: none;
        }
        .program_box button{
            background-color: transparent;
            color: white;
            border: 2px solid white;
            font-size: 18px;
            width: max-content;
            margin: 0 auto;
            position: relative;
            top: 32px;
            cursor: pointer;
        }
        /*Programmes end*/
        /*Vie etudiante start*/
        .flex{
            display: flex;
            height: fit-content;
            flex-direction: row-reverse;
            padding-bottom: 100px;
            background-color: #01509d;
            color: white;
        }
        .flex .box{
            width: 50%;
        }
        .flex .box:last-child{
            padding: 20px;
            box-sizing: border-box;
        }
        .flex h2{
            margin: 20px 0;
        }
        .flex img{
            width: 100%;
            object-fit: cover;
        }
        /*Vie etudiante end*/
        .content .circular img{
            border-radius: 50%;
            width: 320px;
            height: 320px;
            object-fit: cover;
            position: relative;
            display: block;
        }
        .content .circular img:nth-child(1){left: 20%;}
        .content .circular img:nth-child(2){left: 50%;}
        .content .circular img:nth-child(3){left: 30%;}
        /*Content end*/
        @media (max-width:1220px) {
            .content_grid{
                grid-template-columns: repeat(2,280px);
                gap: 30px;
            }
        }
        @media (max-width:800px) {
            .presentation{
                background-position: center;
                height: 500px;
            }
            .presentation .card{
                height: 400px;
                width: 100%;
            }
            .presentation h2{
                font-size: 42px;
            }
            .header_content{
                top: -500px;
            }
            .content p{
                text-align: start;
            }
            .content_grid{
                grid-template-columns: repeat(auto-fit,280px);
            }
            /*Flex*/
            .flex{
                flex-direction: column;
            }
            .flex .box{
                width: 100%;
            }
            .flex img{
                width: 100%;
            }
            /*Images*/
            .content .circular img{
                width: 260px;
                height: 260px;
            }
            .content .circular img:nth-child(1){left: 10%;}
            .content .circular img:nth-child(2){left: 36%;}
            .content .circular img:nth-child(3){left: 20%;}
        }
        @media (max-width:420px) {
            .presentation h2{
                font-size: 36px;
            }
            .content{padding: 15px 0;}
            .content .circular img{width: 150px; height: 150px;}
            .content .circular img:nth-child(1){left: 12%;}
            .content .circular img:nth-child(2){left: 52%;}
            .content .circular img:nth-child(3){left: 30px;}
        }
        @media (max-width:330px) {
            .content .circular img{width: 120px; height: 120px;}
            .content .circular img:nth-child(1){left: 12px;}
            .content .circular img:nth-child(2){left: 130px;}
            .content .circular img:nth-child(3){left: 30px;}
        }
    </style>
    <script src="script.js" defer></script>
</head>
<body>
    <div class="presentation">
        <div class="carousel_container">
            <div class="carousel">
                <img src="../assets/primary_students.jpeg" alt="">
                <img src="../assets/primary_students(2).jpeg" alt="">
                <img src="../assets/primary_students(3).jpeg" alt="">
                <img src="../assets/primary_students.jpeg" alt="">
            </div>
        </div>
        <div class="header_content">
            <header>
                <nav>
                    <div class="logo">
                        <a href="index.html">
                            <img src="../assets/bah_kane_circle.png" alt="school logo">
                        </a>
                    </div>
                    <ul class="menu">
                        <li><a href="index.html">Acceuil</a></li>
                        <li><a href="admission.html">Admission</a></li>
                        <li><a href="program.html">Programmes</a></li>
                        <li><a href="about.html">A propos</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <svg class="burger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="burger_svg" version="1.1" width="400" height="400" viewBox="0, 0, 400,400">
                        <g id="svgg" class="burger">
                            <path id="path0" d="M60.169 74.148 C 47.307 78.873,46.513 97.065,58.895 103.329 L 61.011 104.400 204.800 104.400 
                            L 348.589 104.400 350.794 103.303 C 353.391 102.011,356.886 98.629,357.821 
                            96.503 C 358.184 95.676,358.682 94.579,358.928 94.064 C 359.575 92.705,359.507 
                            86.134,358.823 84.000 C 357.606 80.200,354.434 76.679,350.535 74.798 L 348.050 
                            73.600 204.725 73.648 C 99.229 73.683,61.075 73.815,60.169 74.148 M62.200 170.182 C 47.700 173.758,45.600 193.882,59.041 
                            200.451 L 61.800 201.800 204.800 201.800 L 347.800 201.800 350.479 200.490 C 356.965 
                            197.317,360.468 190.657,359.400 183.529 C 359.180 182.061,358.865 180.726,358.700 180.563 C 358.535 180.400,358.400 180.017,358.400 
                            179.711 C 358.400 176.719,352.298 171.459,347.325 170.164 C 344.316 169.380,65.379 169.398,62.200 170.182 M60.973 267.526 
                            C 46.699 272.270,46.388 293.278,60.515 298.442 C 63.768 299.631,345.832 299.631,349.085 298.442 
                            C 363.245 293.266,362.974 272.618,348.681 267.595 C 345.416 266.447,64.422 266.380,60.973 267.526 " stroke="white" fill="#fff" fill-rule="evenodd" class="burger">
                            </path>
                        </g>
                    </svg>
                </nav>
            </header>
            <div class="card">
                <h2>"La rigueur dans l'excellence"</h2>
            </div>
        </div>
    </div>
    <section class="main_content">
        <div class="content">
            <h1>NOTRE MISSION</h1>
            <div class="underline"></div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Atque amet voluptate, aspernatur dolor ullam quia eligendi possimus vitae ducimus repellat.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa voluptatum beatae minus similique 
                dolores quaerat necessitatibus? Architecto voluptatum accusamus quaerat. Iste repellat atque ut consequuntur, 
                nisi qui vel sunt quibusdam?</p>
        </div>
        <div class="content">
            <h1>NOS ATOUTS</h1>
            <div class="underline"></div>
            <div class="content_grid">
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                       <path d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 
                       42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 
                       0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 
                       416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 
                       50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 
                       56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 
                       64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 
                       42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 
                       101.2V448c0 17.7-14.3 32-32 32H288c-17.7 
                       0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z"/>
                    </svg>
                    <h3>Une epique dynamique</h3>
                </div>
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                       <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 
                       32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 
                       7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 
                        48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                    </svg>
                    <h3>Une bibliothèque physique et virtuelle</h3>
                </div>
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M86.6 64C119 35.5 158.6 15 202.3 5.6C206 19.1 208 33.3 208 48c0 38.4-13.5 73.7-36.1 
                        101.3L86.6 64zM64 86.6l85.2 85.2C121.7 194.5 86.4 208 48 208c-14.7 0-28.9-2-42.4-5.7C15 158.6 35.5 
                        119 64 86.6zM256 0c64.9 0 124.2 24.2 169.4 64L256 233.4 194.6 172C222.9 138.5 240 95.3 
                        240 48c0-16.2-2-32-5.8-47.1C241.4 .3 248.7 0 256 0zM48 240c47.3 0 90.5-17.1 124-45.4L233.4 256 
                        64 425.4C24.2 380.2 0 320.9 0 256c0-7.3 .3-14.6 .9-21.8C16 238 31.8 240 48 240zm463.1 37.8C496 274 
                        480.2 272 464 272c-47.3 0-90.5 17.1-124 45.4L278.6 256 448 86.6c39.8 45.1 64 104.4 64 169.4c0 7.3-.3 
                        14.6-.9 21.8zm-4.7 31.9C497 353.4 476.5 393 448 425.4l-85.2-85.2C390.3 317.5 425.6 304 464 304c14.7 0 
                        28.9 2 42.4 5.7zM340.1 362.7L425.4 448C393 476.5 353.4 497 309.7 506.4C306 492.9 304 478.7 304 464c0-38.4 
                        13.5-73.7 36.1-101.3zM317.4 340C289.1 373.5 272 416.7 272 464c0 16.2 
                        2 32 5.8 47.1c-7.2 .6-14.5 .9-21.8 .9c-64.9 0-124.2-24.2-169.4-64L256 278.6 317.4 340z"/></svg>
                        <h3>Terrain multisport</h3>
                </div>
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M288 0H160 128C110.3 0 96 14.3 96 32s14.3 32 32 32V196.8c0 11.8-3.3 23.5-9.5 33.5L10.3 
                        406.2C3.6 417.2 0 429.7 0 442.6C0 480.9 31.1 512 69.4 512H378.6c38.3 0 69.4-31.1 
                        69.4-69.4c0-12.8-3.6-25.4-10.3-36.4L329.5 230.4c-6.2-10.1-9.5-21.7-9.5-33.5V64c17.7 0 32-14.3 32-32s-14.3-32-32-32H288zM192 
                        196.8V64h64V196.8c0 23.7 6.6 46.9 19 67.1L309.5 320h-171L173 263.9c12.4-20.2 19-43.4 19-67.1z"/>
                    </svg>
                    <h3>Laboratoire scientifique</h3>
                </div>
            </div>
        </div>
        <div class="content">
            <h1>NOS PROGRAMMES</h1>
            <div class="underline"></div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Est reprehenderit distinctio magni officiis quod similique earum unde nulla expedita neque?</p>
            <div class="program_grid">
                <div class="program_box">
                    <a href="program.html#france">
                        <img src="../assets/french flag.png" alt="">
                        <h3>Programme Français</h3>
                        <p>
                            Le programme Français vous permet d’obtenir un diplôme mondialement reconnu, qui ouvre 
                            les portes des universités et des grande écoles Européennes et Nord Américaines a nos élèves.
                        </p>
                        <button>En savoir plus</button>
                    </a>
                </div>
                <div class="program_box">
                    <a href="program.html#guinea">
                        <img src="../assets/Flag-Guinea.webp" alt="">
                        <h3>Programme Guinéen</h3>
                        <p>
                            Du primaire au lycée en passant par le collège, nous dispensons des cours tels que définie 
                            dans le programme guinéen avec un renforcement en anglais et en informatique des le bas age.
                        </p>
                        <button>En savoir plus</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="box">
                <img src="../assets/egg.jpeg" alt="">
            </div>
            <div class="box">
                <h2>La vie à Bah-Kane</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis 
                    exercitationem facere ullam reiciendis quibusdam qui quia illum laborum quasi illo.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde inventore libero cum at ea explicabo. 
                    Magnam reiciendis facilis nisi odio!
                </p>
            </div>
        </div>
         <div class="content">
            <div class="circular">
                <img src="../assets/content_1.jpeg" alt="">
                <img src="../assets/content_2.jpeg" alt="">
                <img src="../assets/content_3.jpeg" alt="">
            </div>
        </div>
        <div class="contact_content">
            <h1>Contactez-nous</h1>
            <div class="contact">
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Nom et Prenom" name="name" value="<?php echo htmlspecialchars($name)?>">
                    <div class="error"><?php echo $errors['name']?></div>

                    <input type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email)?>">
                    <div class="error"><?php echo $errors['email']?></div>

                    <input type="text" placeholder="Objet" name="objet" value="<?php echo htmlspecialchars($objet)?>">
                    <div class="error"><?php echo $errors['objet']?></div>

                    <textarea placeholder="Votre message" cols="30" rows="10" name="message" value="<?php echo htmlspecialchars($message)?>"></textarea>
                    <div class="error"><?php echo $errors['message']?></div>

                    <button name="submit" value="submit">Envoyer</button>
                </form>
                <a href="https://www.google.com/maps/place/Les+%C3%89coles+Bah-Kane/@9.6289839,-13.6078356,17z/data=!3m1!4b1!4m6!3m5!1s0xf1cd5bd9468f2ad:0xca009893b15b190d!8m2!3d9.6289786!4d-13.6056469!16s%2Fg%2F11j4yfszrr" target="_blank">
                    <img src="../assets/bah_kane_gmaps.png" alt="">
                </a>
            </div>

        </div>
    </section>
    <!--Footer start-->
    <footer>
        <div class="block">
            <img src="../assets/bah_kane_circle.png"> 
            <div class="social_block">
                <!--Facebook-->
                <div class="svg_container">
                    <a>
                        <svg viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="img" class="">
                            <title>Facebook</title>
                            <path stroke="none" d="M30,16.08A14,14,0,1,0,13.81,30V20H10.26V16h3.55V13c0-3.53,2.09-5.48,
                            5.29-5.48a20.46,20.46,0,0,1,3.13.28v3.46H20.47A2,2,0,0,0,18.2,13a1.7,1.7,0,0,0,0,
                            .45V16h3.88l-.62,4H18.19V30A14.06,14.06,0,0,0,30,16.08Z">
                            </path>
                        </svg>
                        </a>
                </div>
                <!--Facebook-->
                <!--Instagram-->
                <div class="svg_container">
                    <a>
                        <svg viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="img" class="">
                            <title>Instagram</title><g stroke="none">
                            <path d="M21,2H11a9,9,0,0,0-9,9V21a9,9,0,0,0,9,9H21a9,9,0,0,0,9-9V11A9,9,0,0,0,21,2Zm7,19a7,7,0,0,1-7,7H11a7,7,0,0,1-7-7V11a7,7,0,0,1,7-7H21a7,7,0,0,1,7,7Z"></path>
                            <path d="M16,9a7,7,0,1,0,7,7A7,7,0,0,0,16,9Zm0,12a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z"></path>
                            <circle cx="23.5" cy="8.5" r="1.5"></circle></g></svg>
                    </a>
                </div>
                <!--Instagram-->
                <!--Twitter-->
                <div class="svg_container">
                    <a>
                        <svg viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="img">
                            <title>Twitter</title>
                            <path stroke="none" d="M29.91 7a10.14 10.14 0 01-3.44 1 6.06 6.06 0 002.62-3.44A11 11 0 0125.29 6 5.68 5.68 0 
                            0021 4a6.15 6.15 0 00-6 6.3v-.15a6.44 6.44 0 00.17 1.31A15.39 15.39 0 014 5.41a5.81 5.81 0 00-.79 2.89 6 6 0 
                            002.4 4.83 4.84 4.84 0 01-2.48-.7v.26a5.92 5.92 0 004.58 5.86 9 9 0 01-1.47.18 4.52 4.52 0 01-1-.09 5.85 5.85 
                            0 005.28 4.21 10.77 10.77 0 01-7.1 2.56A7.12 7.12 0 012 25.32 16.51 16.51 0 0010.83 28C21.3 28 27 18.82 27 
                            10.86v-.64A16.34 16.34 0 0029.91 7z">
                            </path>
                        </svg>
                    </a>
                </div>
                <!--Twitter-->
            </div>
        </div>
        <div class="block">
            <h3>Navigation Rapide</h3>
            <span>Programmes</span>
            <span>Inscription</span>
            <span>Activités</span>
        </div>
        <div class="block">
            <h3>Contact</h3>
            <div class="inner_block">
                <span>629 00 40 51</span>
                <span>622 03 06 02</span>
                <span>621 30 20 14</span>
            </div>
            <div class="inner_block">
                <span>contact@ecolesbahkane.com</span>
                <span>administration@ecolesbahkane.com</span>
            </div>
        </div>
        <div class="block">
            <h3>Notre adresse</h3>
            <span>SIMAMBOSSIA</span>
            <span>COMMUNE DE RATOMA</span>
        </div>
    </footer>
    <!--Footer end-->
</body>
</html>