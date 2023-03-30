<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licence</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
        .description{
            text-align: center;
            margin-bottom: 30px !important;
        }
        .info{
            margin-bottom: 80px;
        }
        .info h3{
            padding: 0 0 0 40px;
        }
        .info ul{
            padding: 20px 0 0 80px;
            letter-spacing: 1px;
            font-size: 18px;
        }
        
        @media (max-width:700px) {
            .description{
                text-align: start;
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
            <h1>Licence</h1>
        </div>
            <p class="description">
                Les Licences font partie du système LMD. Elles sanctionnent des études supérieures post baccalauréat de 3 ans.
                Les formations en Licences comportent une bonne dose de pratique et d’immersion dans le milieu du travail permettant ainsi de former des diplômés immédiatement 
            opérationnels et répondant parfaitement aux attentes du monde professionnel.
            </p>
            <div class="info">
                <h3>Documents à fournir</h3>
                <ul>
                    <li>Diplôme et relevé du Baccalauréat</li>
                    <li>Extrait de naissance</li>
                    <li>4 photos d'identité</li>
                    <li>Inscription: 150.000 GNF</li>
                </ul>
            </div>
            <div class="programs">
                <ul>
                    <li>
                        <div class="program_box">
                            <a href="program.php">
                                <h2>Business Administration</h2>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Stratégie de Marketing et Commerce International</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Droit des Affaires</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Ressources Humaines</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Banque Assurances & Finances</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Computer Science et Génie Informatique</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Sciences Infirmières</h2>
                        </div>
                    </li>
                    <li>
                        <div class="program_box">
                            <h2>Géologie et Mines</h2>
                        </div>
                    </li>
                </ul>
            </div>
    </section>
   <!--Footer start-->
   <?php include('../templates/iuheg_footer.php')?>
    <!--Footer end-->
</body>
</html>