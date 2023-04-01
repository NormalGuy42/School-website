<?php 
    //Connect to database
    $db = mysqli_connect('localhost','admin','200410','iuheg');
    //Check connection
    if(!$db){
        echo 'Connection error '.mysqli_connect_error();
    }
    //Write query for all blogs
    $sql_blog = 'SELECT * FROM blogs';
    $sql_events = 'SELECT * FROM events';
    // make query and get result
    $result_blog = mysqli_query($db,$sql_blog);
    $result_events = mysqli_query($db,$sql_events);
    //fetch the resulting rows as an array
    $blogs = mysqli_query($db,$sql_blog);
    $events = mysqli_query($db,$sql_events);
    //Free result from memory
    mysqli_free_result($result_blog);
    mysqli_free_result($result_events);
    //Close connection
    mysqli_close($db);
?>
    <?php include('../templates/admin_iuheg.php')?>
    <div class="page">
        <h1 class="title">Acceuil</h1>
        <div class="content">
            <div class="header">
                <h2>Evenements</h2>
                <div class="data_add">
                    <a href="../add_event.php">
                        +
                    </a>
                </div>
            </div>
            <div class="data_grid">
                <?php foreach($events as $event){?>
                    <div class="data_box">
                        <h3><?php echo $event['title']?></h3>
                        <span class="menu_btn">&#8942;</span>
                        <section class="menu">
                            <div>Supprimer</div>
                            <div>Modifier</div>
                        </section>
                    </div>
                    <section class="info">
                        <div>Titre<?php echo $event['title']?></div>
                        <div>Date <?php echo $event['day']?> <?php echo $event['month']?></div>
                        <div>Image <img src="../../assets/event/<?php echo $event['image']?>" alt=""></div>
                        <div>Contenu <?php echo $event['title']?></div>
                    </section>
                <?php }?>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <h2>Blogs</h2>
                <div class="data_add">
                    <a href="../add_event.php">
                        +
                    </a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <h2>Contact</h2>
                <div class="data_add">
                    <a href="../add_event.php">
                        +
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>