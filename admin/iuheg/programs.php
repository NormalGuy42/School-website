<?php
    include('../../config/connection.php');
    //Write query for all blogs
    $licenceSql = 'SELECT * FROM licence';
    $mastersSql = 'SELECT * FROM masters';
    $formationSql = 'SELECT * FROM formation';
    $formationQualifiante = 'SELECT * FROM formation WHERE main_bool >0';
    // make query and get result
    $licenceResult = mysqli_query($db,$licenceSql);
    $mastersResult = mysqli_query($db,$mastersSql);
    $formationResult = mysqli_query($db,$formationSql);
    //fetch the resulting rows as an array
    $licences = mysqli_query($db,$licenceSql);
    $masters = mysqli_query($db,$mastersSql);
    $formations = mysqli_query($db,$formationSql);
    //Free result from memory
    mysqli_free_result($licenceResult);
    mysqli_free_result($mastersResult);
    mysqli_free_result($formationResult);
?>

<?php include('../templates/admin_iuheg.php')?>
    <div class="page">
        <h1 class="title">Programmes</h1>
        <div class="content">
            <div class="header">
                <h2>Licence</h2>
                <div class="data_add">
                    <a href="../add_program.php">
                        +
                    </a>
                </div>
            </div>
            <div class="data_grid">
            <?php foreach($licences as $licence):?>
                    <div class="container">
                        <div class="data_box">
                            <h3><?php echo $licence['title']?></h3>
                            <span class="menu_btn">&#8942;</span>
                            <section class="menu">
                                <form action="programs.php" method="POST" class="form_delete">
                                    <input type="hidden" name="licenceID" value="">
                                    <button value="submit" name="deleteLicence">
                                        Supprimer
                                    </button>
                                </form>
                            </section>
                        </div>
                        <section class="info">
                            <div><h3>Titre</h3><?php echo $licence['title']?></div>
                            <div><h3>Image</h3><?php echo '<img src="'.'../'.$licence['image'].'">'?></div>
                            <div><h3>Presentation</h3><?php echo $licence['presentation']?></div>
                            <div><h3>Structure</h3><?php echo $licence['structure']?></div>
                            <div><h3>Admission</h3><?php echo $licence['admission']?></div>
                            <div><h3>Scolarite</h3><?php echo $licence['scolarite']?></div>
                        </section>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <h2>Masters</h2>
                <div class="data_add">
                    <a href="../add_program.php">
                        +
                    </a>
                </div>
            </div>
            <div class="data_grid">
                <?php foreach($masters as $master):?>
                    <div class="container">
                        <div class="data_box">
                            <h3><?php echo $master['title']?></h3>
                            <span class="menu_btn">&#8942;</span>
                            <section class="menu">
                                <form action="programs.php" method="POST" class="form_delete">
                                    <input type="hidden" name="masterID" value="">
                                    <button value="submit" name="deleteMaster">
                                        Supprimer
                                    </button>
                                </form>
                            </section>
                        </div>
                        <section class="info">
                            <div><h3>Titre</h3><?php echo $master['title']?></div>
                            <div><h3>Image</h3><?php echo '<img src="'.'../'.$master['image'].'">'?></div>
                            <div><h3>Presentation</h3><?php echo $master['presentation']?></div>
                            <div><h3>Structure</h3><?php echo $master['structure']?></div>
                            <div><h3>Admission</h3><?php echo $master['admission']?></div>
                            <div><h3>Scolarite</h3><?php echo $master['scolarite']?></div>
                        </section>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <h2>Formation</h2>
                <div class="data_add">
                    <a href="../add_program.php">
                        +
                    </a>
                </div>
            </div>
            <?php foreach($formations as $formation):?>
                    <div class="container">
                        <div class="data_box">
                            <h3><?php echo $formation['title']?></h3>
                            <span class="menu_btn">&#8942;</span>
                            <section class="menu">
                                <form action="programs.php" method="POST" class="form_delete">
                                    <input type="hidden" name="formationID" value="">
                                    <button value="submit" name="deleteFormation">
                                        Supprimer
                                    </button>
                                </form>
                            </section>
                        </div>
                        <section class="info">
                            <div><h3>Titre</h3><?php echo $formation['title']?></div>
                            <div><h3>Image</h3><?php echo '<img src="'.'../'.$formation['image'].'">'?></div>
                            <div><h3>Presentation</h3><?php echo $formation['presentation']?></div>
                            <div><h3>Structure</h3><?php echo $formation['structure']?></div>
                            <div><h3>Admission</h3><?php echo $formation['admission']?></div>
                            <div><h3>Scolarite</h3><?php echo $formation['scolarite']?></div>
                        </section>
                    </div>
                <?php endforeach ?>
        </div>
        <div class="content">
            <div class="header">
                <h2>Formation Qualifiante</h2>
                <div class="data_add">
                    <a href="../add_program.php">
                        +
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>