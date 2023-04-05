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

    //Delete and modify
    //For events
    if(isset($_POST['deleteEvent'])){
        $deleteID = mysqli_real_escape_string($db,$_POST['eventID']);
        $sql = "DELETE FROM events WHERE id = $deleteID";
        mysqli_query($db,$sql);
        header('Location: accueil.php');
    }
    //For blogs
    if(isset($_POST['deleteBlog'])){
        $deleteID = mysqli_real_escape_string($db,$_POST['blogID']);
        $sql = "DELETE FROM blogs WHERE id = $deleteID";
        mysqli_query($db,$sql);
        header('Location: accueil.php');
    }
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
                    <div class="container">
                        <div class="data_box">
                            <h3><?php echo $event['title']?></h3>
                            <span class="menu_btn">&#8942;</span>
                            <section class="menu">
                                <form action="accueil.php" method="POST" class="form_delete">
                                    <input type="hidden" name="eventID" value="<?php echo $event['id']?>">
                                    <button value="submit" name="deleteEvent">
                                        Supprimer
                                    </button>
                                </form>
                            </section>
                        </div>
                        <section class="info">
                            <div><h3>Titre</h3><?php echo $event['title']?></div>
                            <div><h3>Date</h3><?php echo $event['day']?> <?php echo $event['month']?></div>
                            <div><h3>Image</h3><img src="../../assets/event/<?php echo $event['image']?>" alt=""></div>
                            <div><h3>Contenu</h3> <?php echo $event['contenu']?></div>
                        </section>
                    </div>
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
            <div class="data_grid">
            <?php foreach($blogs as $blog){?>
                    <div class="container">
                        <div class="data_box">
                            <h3><?php echo $blog['title']?></h3>
                            <span class="menu_btn">&#8942;</span>
                            <section class="menu">
                                <form action="accueil.php" method="POST" class="form_delete">
                                    <input type="hidden" name="blogID" value="<?php echo $blog['id']?>">
                                    <button value="submit" name="deleteBlog">
                                        Supprimer
                                    </button>
                                </form>
                            </section>
                        </div>
                        <section class="info">
                            <div><h3>Titre</h3><?php echo $blog['title']?></div>
                            <div><h3>Date</h3><?php echo $blog['date']?></div>
                            <div><h3>Image</h3><img src="../../assets/blog/<?php echo $blog['image']?>" alt=""></div>
                            <div><h3>Contenu</h3> <?php echo $blog['article']?></div>
                        </section>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    </section>
</body>
</html>