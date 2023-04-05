<?php
    include('../config/connection.php');
    $sql = "SELECT title,id FROM masters";
    $masters = mysqli_query($db,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masters</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

</head>
<body>
    <!-- header start   -->
    <?php include('../templates/iuheg_header.php')?>
    <!-- header end -->
    <section>
        <div class="title">
            <h1>Masters</h1>
        </div>
        <p class="description">
            L’institut universitaire des Hautes Études de Guinée [IUHEG], met en place une série de Masters à l'intention des titulaires de Licence ou de Maîtrise, ainsi que des cadres des services publics et privés 
            désireux d'approfondir leurs connaissances académiques et professionnelles dans les domaines suivants:
        </p>
        <div class="programs">
            <ul>
            <?php foreach($masters as $master):?>
                <li>
                    <a href="program.php?id=<?php echo $master['id']?>&type=masters">
                        <div class="program_box">
                            <h2><?php echo $master['title']?></h2>
                        </div>
                    </a>
                </li>
            <?php endforeach?>
            </ul>
    </section>
    <!--Footer start-->
    <?php include('../templates/iuheg_footer.php')?>
    <!--Footer end-->
</body>
</html>