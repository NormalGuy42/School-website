<?php 
    include('../config/connection.php');
    //Connect to database
    $db = mysqli_connect($servername,$username,$password,$dbname);
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUHEG</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
        /*Parallax start*/
        /*Parallax end*/
        /*The way this works is by leaving presentation with a lower 
        z-index than the main content*/
        .hide{display: none !important;}

        .presentation{
            height: 100vh;
            width: 100%;
            background: url('../assets/students\ pic.png') no-repeat;
            background-size: cover;
            background-position: center;
            z-index: 1;
            position: fixed;
        }
        .main{
            z-index: 80;
            position: relative;
            top: 100vh;
        }
        /*Stats start*/
        .stats{
            display: grid;
            grid-template-columns: repeat(auto-fit,280px);
            justify-content: space-around;
            width: 100%;
            background-color: white;
            padding: 40px 0;
        }
        .stats .column{
            display: flex;
            align-items: center;
        }
        .stats label{
            letter-spacing: 0.03rem;
            font-weight: bold;
            color: royalblue;
            margin-bottom: 8px;
            text-align: center;
        }
        /*Stats end*/
        /*Filler content start*/
        .flex{
            display: flex;
            flex-wrap: wrap;
        }
        .flex:first-child{
            flex-direction: row-reverse;
            background-color: #020220;
            color: white;
        }
        .flex:first-child h3{
            color: rgb(27,76,208);
        }
        .flex:last-child{
            background-color: white;
            color: black;
        }
        .content .container{
            width: 50%;
            min-height: 500px;
        }
        .content .container h3{
            text-align: center;
            margin: 20px 0px; 
            font-size: 36px;
        }
        .content .container img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .content .container p{
            display: flex;
            flex-wrap: wrap;
            line-height: 25px;
            letter-spacing: 0.03em;
            padding: 0px 18px;
            font-size: 20px;
            max-height: 435px;
            overflow: hidden;
            text-overflow: ellipsis;
            
        }
        .content .container p span{
            display: block;
            margin-top: 20px;
        }
        .content .container a{
            text-decoration: none;
        }
        .content .container button{
            display: block;
            width: 100px;
            height: 30px;
            font-size: 18px;
            margin: 20px auto;
            color: white;
            background-color: purple;
            cursor: pointer;
        }
        /*Filler content end*/
        /*Temoignages start*/
        .temoignages{
            min-height: 300px;
            background-color: darkblue;
            overflow: hidden;
        }
        .temoignages_container{
            position: relative;
            left: 0;
            height: 100%;
            background-color: darkblue;
            display: flex;
            animation: slide 20s infinite;
            padding: 80px 0;
            overflow: hidden;
            width: 400%;
        }
        @keyframes slide {
            0%{
                left: 0;
            }
            20%{
                left: 0;
            }
            33%{
                left: -100%;
            }
            53%{
                left: -100%;
            }
            66%{
                left: -200%;
            }
            83%{
                left: -200%;
            }
            100%{
                left: -300%;
            }
        }
        .temoignages .box{
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 20px;
        }
        .temoignages .box img{
            height: 60px;
            width: 60px;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
            margin-top: 50px;
        }
        .temoignages .box label{
            margin-top: 10px;
        }
        /*Temoignage end*/
        /*Upcoming events start*/
        .upcoming{
            background-color: #020220;
            padding-top: 80px;
        }
        .upcoming h3{
            color: rgb(27,76,208);
            font-size: 36px;
            text-align: center;
        }
        .upcoming .box_container{
            background-color: #020220;
            display: grid;
            grid-template-columns: repeat(auto-fit,250px);
            gap: 100px;
            justify-content: space-around;
            padding: 50px 30px;
        }
        .upcoming .box{
            display: flex;
            flex-direction: column;
            min-height: 350px;
            background-color: #eee;
        }
        .upcoming .box h3{
            color: white;
        }
        .upcoming .box:hover{
            scale: 1.05;
            transition: all .3s;
        }
        .upcoming .box a{
            color: inherit;
            text-decoration: none;
        }
        .upcoming .box img{
            height: 250px;
            width: 100%;
            object-fit: cover;
            object-position: center top;
            cursor: pointer;
        }
        .upcoming .card{
            position: relative;
            top: -30px;
            background-color: blue;
            color: white;
            width: min-content;
            padding: 12px;
            text-align: center;
        }
        .upcoming .caption{
            padding: 8px;
        }
        .upcoming .box p{
            min-height: 60px;
            display: table-cell;
            letter-spacing: 0.05rem;
            font-weight: bold;
            margin-bottom: 10px;
            position: relative;
            top: -25px;
        }
        .upcoming .box .caption label{
            margin-top: 10px;
        }
        /*Upcoming events end*/
        /*News start*/
        .news_outer{
            background-color: white;
        }
        .news{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
        }
        .outer_news_container{
            max-width: 600px;
        }
        /*News heading start*/
        .news_heading{
            display: flex;
            justify-content: center;
            gap: 25px;
        }
        .news_heading h3{
            margin-top: 30px;
            font-size: 36px;
            padding-left: 20px;
        }
        .news_heading .line{
            height: 2px;
            width: 60%;
            max-width: 400px;
            margin: 52px 15px 0 0;
            border-bottom: 2px solid gray;
        }
        /*News heading end*/
        .news_container{
            width: 50%;
            max-width: 800px;
            min-width: 300px;
            padding: 40px;
            display: grid;
            grid-template-columns: repeat(2,320px);
        }
        .news_container h3{
            font-size: 28px;
            margin-bottom: 20px;
        }
        .news_box{
            height: fit-content;
            width: 150px;
            margin: 0 auto 20px;
        }
        .news_container .news_box img{
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
        .news_box label{
            margin: 10px 0 12px;
            display: block;
            font-size: 14px;
            color: gray;
            font-weight: bold;
        }
        .news_box p{
            font-weight: bold;
            letter-spacing: 0.03rem;
        }
        /*For the main news start*/
        .news_box.headline{
            height: 100%;
            width: 320px;
        }
        .news_box.headline img{
            height: 200px;
        }
        /*For the main news end*/
        /*Other news start*/
        .other_news .news_box{
            display: flex;
            flex-direction: column;
        }
        /*Other news end*/
        /*Newsletter start*/
        .newsletter{
            height: 500px;
            width: 360px;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: cornflowerblue;
            color: white;
        }
        .expand{
            width: 100% !important;
        }
        .newsletter svg{
            fill: white;
        }
        .newsletter h3{
            font-size: 26px;
            text-align: center;
            margin: 20px 0;
        }
        .newsletter_box{
            height: 100px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .newsletter input{
            height: 40px;
            width: 80%;
            max-width: 300px;
            font-size: 20px;
            padding: 0 5px;
            border: 1px solid grey;
            margin-bottom: 20px;
        }
        .newsletter button{
            background-color: blueviolet;
            color: white;
            height: 42px;
            padding: 5px;
            width: 82%;
            max-width: 312px;
            min-width: 100px;
            font-size: 18px;
            border: 1px solid black;
        }
        /*Newsletter end*/
        /*News end*/
        @media (max-width:1120px) {
            .stats{
                grid-template-columns: repeat(2,315px);
            }
            .stats .column{
                justify-content: space-between;
                flex-direction: column;
            }
           
        }
        @media (max-width:960px) {
            .news{
                display: block;
            }
            .outer_news_container{
                max-width: unset;
                margin: 0 auto;
            }
            .news_container{
                width: 100%;
                justify-content: center;
                padding: 0;
                grid-template-columns: repeat(1,90%);
                margin: 0 auto;
            }
            .other_news .news_box{
                display: flex;
                flex-direction: row;
                width: 230px;
                gap: 12px;
            }
            .other_news .news_box img{
                min-width: 100px;
            }
            .newsletter{
                width: 100%;
            }
        }
        @media (max-width:690px) {
            .presentation{
                background-position: unset;
            }
            .stats{
                grid-template-columns: repeat(1,100%);
            }
            /*Filler content start*/
            .content .container{
                width: 100%;
                height: fit-content;
                min-height: unset;
                margin-top: 70px;
            }
            .content .container p{
                max-height: none;
            }
            /*First content section start*/
            .flex:first-child{
                flex-direction: column-reverse;
            }
            .flex:first-child .container img{
                position: relative;
                bottom: -5px;
            }
            /*First content section end*/
            /*Second content section start*/
            .flex:last-child{
                flex-direction: column-reverse;
            }
            .flex:last-child .container:first-child{
                background-color: white;
            }
            .flex:last-child .container:first-child img{
                position: relative;
                /* top: -2px; */
                top: 4px;
            }
            .content .container  button{
                display: none;
            }
            /*Second content section end*/
            /*Filler content end*/
            .newsletter h3{
                font-size: 26px;
            }
        }
        @media (max-width:400px) {
            .news_container{
                grid-template-columns: repeat(1,320px);
            }
            .newsletter input{
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="presentation">
        <!-- header start   -->
        <?php include('../templates/iuheg_header.php')?>
        <!-- header end -->
    </div>
    <div class="main">
        <div class="stats">
            <div class="column">
                <img src="../assets/bibli.webp">                     
                <label>2 bibliothèques modernes avec +1000 lives</label>
            </div>
            <div class="column">
                <img src="../assets/labo.png">
                <label>Un laboratoire de qualité</label>
            </div>
            <div class="column">
                <img src="../assets/prof.webp">
                <label>Les meilleurs professeurs</label>
            </div>
            <div class="column">
                <img src="../assets/diplomes.png">
                <label>Des diplomes reconnus</label>
            </div>
        </div>
        <div class="content">
                <!--Student life start-->
                <div class="flex">
                        <div class="container">
                            <img src="../assets/student_life.webp">
                        </div>
                        <div class="container">
                            <h3>Vie Etudiante</h3>
                            <p>
                                Le groupe BAH-KANE, à travers sa structure universitaire IUHEG, met en place une série de Masters à l'intention des titulaires de Licence ou de Maîtrise, ainsi que des cadres des 
                                services publics et privés désireux d'approfondir 
                                leurs connaissances académiques et professionnelles 
                            </p>
                        </div>
                </div>
                <!--Student life end-->
                <!--Director word start-->
                <div class="flex">
                        <div class="container">
                            <img src="../assets/director.webp">
                        </div>
                        <div class="container">
                            <h3>Mot du Recteur</h3>
                            <p>
                            <span>Chers visiteurs,</span>
                            <span>  J’ai l’immense plaisir de vous souhaiter la bienvenue sur le portail Web de l’Institut Universitaire des 
                            Hautes Etudes de Guinée (IUHEG). Il s’agit d’une plateforme qui vous mènera à la découverte virtuelle de 
                            l’IUHEG, votre Université. Ce site web constitue un instrument essentiel de notre communication interne 
                            et externe.</span>
                            <span> Dans un environnement socio-économique national et international en perpétuelle mutation, caractérisé par 
                            une compétition de plus exacerbée, les institutions performantes marquent la différence par la qualité des 
                            formations qu’elles offrent aux apprenants. C’est dans ce contexte que l’IUHEG est appelée aujourd’hui, 
                            plus que jamais à conforter et à améliorer son niveau d’excellence.
                            </span>
                            </p>
                        <a href="propos.html"><button>Voir plus</button></a>
                        </div>
                </div>
                <!--Director word end-->
        </div>
        <div class="temoignages">
                <div class="temoignages_container">
                    <div class="box" >
                        <h3>"Mon expérience à l'IUHEG a été merveilleuse. Les professeurs étaient 
                            super et les classes sont confortables"</h3>
                        <img src="../assets/circular_default_user.png" alt="">
                        <label for="">Raby</label>
                    </div>
                    <div class="box">
                        <h3>"L'enseignement à IUHEG est de qualité, j'ai passé mes années les plus instructives là-bas"</h3>
                        <img src="../assets/circular_default_user.png" alt="">
                        <label for="">Mamadou</label>
                    </div>
                    <div class="box">
                        <h3>"Les classes sont climatisées et le wifi marche très bien"</h3>
                        <img src="../assets/circular_default_user.png" alt="">
                        <label for="">Arthur</label>
                    </div>
                    <div class="box" >
                        <h3>"Mon expérience à l'IUHEG a été merveilleuse. Les professeurs étaient 
                            super et les classes sont confortables"</h3>
                        <img src="../assets/circular_default_user.png" alt="">
                        <label for="">Raby</label>
                    </div>
                </div>
        </div>
        <div class="upcoming">
                <h3>Evenements à venir</h3>
                <div class="box_container">
                    <?php foreach($events as $event){?>
                        <div class="box">
                            <a href="event.html">
                                <img src="../assets/<?php echo $event['image']?>">
                                <div class="card">
                                    <h3><?php echo $event['day']?></h3>
                                    <span><?php echo $event['month']?></span>
                                </div>
                                <div class="caption">
                                    <p>
                                        <?php echo $event['title']?>
                                    </p>
                                    <label for=""><?php echo $event['hour']?><span>h</label>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
        </div>
        <div class="news_outer">
            <div class="news">
                <div class="outer_news_container">
                    <div class="news_heading">
                        <h3>Actualités</h3>
                        <div class="line"></div>
                    </div>
                    <div class="news_container">
                        <?php foreach($blogs as $blog){?>
                        <?php if($blog['main_boolean']){?>
                        <div class="news_box headline">
                            <a href="event.php">
                                <img src="../assets/blog/<?php echo $blog['image']?>">
                                <label for=""><?php echo htmlspecialchars($blog['created_at'])?></label>
                                <p><?php echo htmlspecialchars($blog['title'])?></p>
                            </a>
                        </div>
                        <?php }else{?>
                        <div class="other_news">
                            <div class="news_box">
                                <a href="event.php">
                                    <div>
                                        <img src="../assets/blog/<?php echo $blog['image']?>">
                                    </div>
                                    <div>
                                        <label for=""><?php echo htmlspecialchars($blog['created_at'])?></label>
                                        <p><?php echo htmlspecialchars($blog['title'])?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php }?>
                        <?php }?>
                    </div>
                </div>
                <!--Newsletter start-->
                <div class="newsletter">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="80" width="80"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 
                        64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                    <h3>S'inscrire à notre newsletter</h3>
                    <div class="newsletter_box">
                        <input type="email" placeholder="Mon email">
                        <button>S'incrire</button>
                    </div>
                </div>
                <!--Newsletter end-->
        </div>
        </div>
        <!--Footer start-->
        <?php include('../templates/iuheg_footer.php')?>
        <!--Footer end-->
    </div>
   <script defer>
    //Evenements
    var boxContainer = document.querySelector('.box_container');
    var upcoming =document.querySelector('.upcoming');
    if(boxContainer.children.length == 0){
        upcoming.classList.add('hide')
    }
    //Change newsletter size when there is no blog
    var news = document.querySelector('.news_container');
    var outerNews = document.querySelector('.outer_news_container');
    var newsletter = document.querySelector('.newsletter');
    if(news.children.length == 0){
        outerNews.classList.add('hide')
        newsletter.classList.add('expand');
    }
   </script>
</body>
</html>