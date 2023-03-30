

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation technique et professionelle</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
        .title h1{
            font-size: 56px;
        }
        .section_title{
            text-align: center;
            color: darkblue;
            font-size: 30px;
        }
        @media (max-width:420px) {
            .title h1{
                font-size: 45px;
            }
        }
    </style>
</head>
<body>
    <!-- header start   -->
    <?php include('../templates/iuheg_header.php')?>
    <!-- header end -->
    <section>
        <div class="title">
            <h1>Formation professionelle</h1>
        </div>
        <p class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Delectus reprehenderit fugiat, dolorem facilis dicta fugit saepe quasi ut a repellendus?
        </p>
        <section>
            <h1 class="section_title">NOS FORMATIONS</h1>
            <div class="programs">
                <ul>
                    <li>
                        <div class="program_box">
                            <h2>Géometrie et Topographie</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Agent technique de santé et Sage femme</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Comptabilité et Informatique de Gestion</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>
                            Informatique
                            </h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Logistique et Transport</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Transit et Douane</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Marketing et Commerce internationale</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Sanitaier, Froid et Ventilation</h2>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <h1 class="section_title">NOS FORMATIONS QUALIFIANTES (CAP,BT)</h1>
            <div class="programs">
                <ul>
                    <li>
                        <div class="program_box">
                            <h2>Batiment: Coffrage, Ferraillage et Maçonnerie</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Plomberie et Electricité</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Carrelage et Peinture</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Sécretariat de Direction</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Techniques comptables (Operations comptables et Sage compta)</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Entreuprenariat et Innovation</h2>
                        </div>
                    </li>
                </ul>
            </div>
        </section>        
    </section>
    <!--Footer start-->
   <?php include('templates/iuheg_footer.php')?>
    <!--Footer end-->   
</body>
</html>