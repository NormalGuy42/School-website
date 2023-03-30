<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
        .contact_container{
            width: 90%;
            max-width: 1200px;
            min-width: 300px;
            display: grid;
            grid-template-columns: repeat(auto-fit,300px);
            margin: 50px auto;
            justify-content: center;
            min-height: 400px;
            background-color: #020220;
        }
        .contact_column{
            display: flex;
            flex-direction: column;
            text-align: center;
            margin-bottom: 40px;
            margin-top: 80px;
            color: white;
        }
        .contact_column svg{
            height: 80px;
            width: 80px;
            margin: 0 auto;
            margin-bottom: 15px;
            fill: white;
        }
        .contact_column p{
            line-height: 24px;
            letter-spacing: 0.05rem;
            color: white;
        }
        .contact_column span{
            display: block;
            color: darkblue;
            font-weight: bold;
            margin-top: 5px;
        }
        /*Contact form start*/
        .contact_form{
            width: 100%;
            margin-bottom: 40px;
        }
        form{
            background-color: #020220;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            min-width: 300px;
            margin: 0 auto;
            box-sizing: border-box;
        }
        .contact_form h2{
            color: royalblue;
            margin-bottom: 30px;
        }
        .contact_form input{
            padding: 15px 20px;
            font-size: 18px;
            border: 1px solid #eee;
            display: block;
            margin-bottom: 20px;
            width: 350px;
        }
        .contact_form textarea{
            height: 150px;
            width: 350px;
            border: 1px solid #eee;
            padding: 15px 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
        }
        .contact_form button{
            width: 392px;
            padding: 12px 0;
            font-size: 18px;
            margin-top: 20px;
            background-color: royalblue;
            color: whitesmoke;
            display: block;
        }
        /* #map{
            height: 400px;
            width: 400px;
        } */
        /*Contact form end*/
        @media (max-width:520px) {
            .title h1{
                font-size: 50px;
            }
            .contact_container{
                grid-template-columns: repeat(1,100%);
            }
            .contact_form input{
                width: 250px;
            }
            .contact_form textarea{
                width: 250px;
            }
            .contact_form button{
                width: 292px;
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
            <h1>Contactez-nous</h1>
        </div>
        <div class="contact_container">
            <div class="contact_column">
                <!-- <img src="../assets/phone.webp" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 
                    11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                    <h3>APPELEZ-NOUS</h3>
                    <p>
                        622 35 11 70 - 622 15 84 04-
                            623 38 03 04
                    </p>
            </div>
           
            <div class="contact_column">
                <!-- <img src="../assets/message.webp" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 
                64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                <h3>ENVOYEZ NOUS UN EMAIL</h3>
                <p> info@iuheg.org</p>
            </div>
            <div class="contact_column">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 
                33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                <h3>HEURES DE TRAVAIL</h3>
                <p>
                    Pendant que l'école est en session, nos bureaux du personnel sont ouverts de
                    <span>8:00-15:30</span> 
                </p>
            </div>
            <div class="contact_column">
                <!-- <img src="../assets/location.webp" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 
                168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 
                64 0 1 1 0-128z"/></svg>
                <h3>ADRESSE</h3>
                <p>
                    SIÈGE; QUARTIER SIMAMBOSSIA
                    COMMUNE DE RATOMA
                </p>
            </div>
        </div>
        <div id="map">
            <!-- <script async
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
            </script> -->
        </div>
        <div class="contact_form">
            <form action="">
                <h2>Envoyez nous un message</h2>
                <input type="text" placeholder="Nom et Prénom">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Objet">
                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <button>Envoyez</button>
            </form>
        </div>
    </section>
    <!--Footer start-->
    <?php include('../templates/iuheg_footer.php')?>
    <!--Footer end-->
    <script>
        // Initialize and add the map
        function initMap() {
        // The location of the University
        const iuheg = { lat: -25.344, lng: 131.031 };
        // The map, centered at IUHEG
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: iuheg,
        });
        // The marker, positioned at the IUHEG
        const marker = new google.maps.Marker({
            position: iuheg,
            map: map,
        });
        }

        window.initMap = initMap;
    </script>
</body>
</html>