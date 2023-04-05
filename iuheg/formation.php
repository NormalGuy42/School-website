<?php
    include('../config/connection.php');
    $sql = 'SELECT title,main_bool,id FROM formation';
    $formations = mysqli_query($db,$sql);
    $formationQualifiante = [];
?>

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
                    <?php foreach($formations as $formation):?>
                        <?php if(!$formation['main_bool']):?>
                        <li>
                            <a href="programs.php?type=formation&id=<?php echo $formation['id']?>">
                                <div class="program_box">
                                    <h2><?php echo $formation['title']?></h2>
                                </div>
                            </a>
                        </li>
                        <?php endif?>
                    <?php endforeach ?>
                </ul>
            </div>
        </section>
        <section>
            <h1 class="section_title">NOS FORMATIONS QUALIFIANTES (CAP,BT)</h1>
            <div class="programs">
                <ul>
                    <?php foreach($formations as $formation):?>
                        <?php if($formation['main_bool']):?>
                        <li>
                            <a href="programs.php?type=formation&id=<?php echo $formation['id']?>">
                                <div class="program_box">
                                    <h2><?php echo $formation['title']?></h2>
                                </div>
                            </a>
                        </li>
                        <?php endif?>
                    <?php endforeach ?>
                </ul>
            </div>
        </section>        
    </section>
    <!--Footer start-->
   <?php include('../templates/iuheg_footer.php')?>
    <!--Footer end-->   
</body>
</html>