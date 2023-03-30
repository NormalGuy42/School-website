<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenement</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
            margin: 20px 20px 10px;
            padding: 0 20px;
        }
        .time{
            display: flex;
            padding: 0 20px;
            justify-content: end;
            margin: 20px auto;
            width: 80%;
        }
        label{
            font-size: 18px;
            color: gray;
            display: block;
        }
        img{
            height: 350px;
            width: 80%;
            max-width: 850px;
            object-fit: cover;
            margin: 0 auto;
            display: block;
        }
        .content{
            width: 80%;
            margin: 0 auto;
            max-width: 850px;
            margin-bottom: 200px;
        }
        p{
            font-size: 18px;
            line-height: 22px;
            letter-spacing: 0.03rem;
            margin: 20px 0;
            
        }
    </style>
</head>
<body>
    <!-- header start   -->
    <?php include('../templates/iuheg_header.php')?>
    <!-- header end -->
    <section>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fugiat! 
        Temporibus aut repudiandae quibusdam nulla incidunt explicabo esse, totam voluptas.</h1>
        <div class="time">
            <label for="">2023-03-21</label>
        </div>
        <img src="../assets/students pic.png" alt="">
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi incidunt nulla officia consectetur deleniti ut, vel consequuntur veritatis porro, labore distinctio, adipisci molestias. Assumenda, illo qui ad doloremque pariatur commodi neque magni similique quisquam, quas repudiandae, nemo tempora vel unde. 
            Culpa dolores eveniet deleniti magni ea dolorum placeat provident nemo.</p>
        </div>
    </section>
    <!--Footer start-->
    <?php include('../templates/iuheg_footer.php')?>
    <!--Footer end-->
</body>
</html>