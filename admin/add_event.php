<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="stylesheet" href="admin_style.css">
    <script src="admin_script.js" defer></script>
    <style>
        .close_container{
            position: relative;
            height: 50px;
        }
        .choice{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .choice select{
            max-width: 700px;
            width: 80%;
            min-width: 300px;
        }
        svg.close{
            position: absolute;
            right: 5px;
            cursor: pointer;
            height: 50px;
            width: 50px;
        }
        form{
            /* display: flex; */
            display: none;
            flex-direction: column;
            align-items: center;
        }
        h2{
            text-align: start;
            width: 80%;
        }
        input,select,textarea{
            max-width: 700px;
            width: 80%;
            min-width: 300px;
            padding: 15px 20px;
            box-sizing: border-box;
            font-size: 17px;
            background-color: white;
        }
        .img_container{
            background-color: #eee;
            max-width: 700px;
            width: 80%;
            min-width: 300px;
            height: 250px;
            margin-bottom: 20px;
        }
        button{
            height: 38px;
            background-color: darkblue;
            color: white;
            font-size: 18px;
        }
        .finish{
            margin: 30px 0;
        }
        .flex{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
            width: 80%;
            min-width: 300px;
            max-width: 700px;
        }
        .flex input,select{
            width: 150px;
            min-width: unset;
        }
        .row{
            display: flex;
            margin: 10px 0 20px;
            width: 80%;
            min-width: 300px;
            max-width: 700px;
            align-items: center;
        }
        .row input[type="checkbox"]{
            height: 30px;
            width: 30px;
            min-width: unset;
        }
        .row label{
            color: gray;
            margin-left: 10px;
        }
        @media (max-width: 600px) {
            .page{
                padding: 12px;
                width: 100%;
            }
        }
    </style>
</head>
    <body>
        <?php include('../templates/admin_header.php')?>
        <div class="page">
            <div class="close_container">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 25 25" onclick="history.back()" class="close">
                    <path fill="currentColor" d="m13.06 12.15 5.02-5.03a.75.75 0 1 0-1.06-1.06L12 11.1 
                    6.62 5.7a.75.75 0 1 0-1.06 1.06l5.38 5.38-5.23 5.23a.75.75 0 1 0 1.06 1.06L12 13.2l4.88 
                    4.87a.75.75 0 1 0 1.06-1.06l-4.88-4.87z">
                    </path>
                </svg>
            </div>
            <div class="choice">
                <h2>Choissisez</h2>
                <select name="program_type" id="">
                    <option>Que voulez-vous ajouter?</option>
                    <option value="event">Evenement</option>
                    <option value="blog">Blog</option>
                </select>
            </div>
            <form action="add_program.php" method="POST" id="event">
                <h2>Titre</h2>
                <input type="text" placeholder="Entrer le titre">
                <h2>Date</h2>
                <input type="text" placeholder="aaaa/mm/jj">
                <h2>Mettre une image</h2>
                    <div class="img_container">

                    </div>
                    <button>Envoyer</button>
                <h2>Contenu</h2>
                <textarea name="presentation" id="" cols="30" rows="20"></textarea>
                <button class="finish">Terminer</button>
            </form>
            <form action="add_program.php" method="POST" id="blog">
                <h2>Titre</h2>
                <input type="text" placeholder="Entrer le titre">
                <div class="row">
                    <input type="checkbox">
                    <label for="">Mettre en valeur</label>
                </div>
                <div class="flex">
                    <h2>Jour</h2>
                    <input type="text" placeholder="aaaa/mm/jj">
                    <h2>Mois</h2>
                    <select name="month" id="">
                        <option value="JAN">JAN</option>
                        <option value="FEV">FEV</option>
                        <option value="MARS">MARS</option>
                        <option value="AVR">AVR</option>
                        <option value="MAI">MAI</option>
                        <option value="JUIN">JUIN</option>
                        <option value="JUL">JUL</option>
                        <option value="AOÛT">AOÛT</option>
                        <option value="SEP">SEP</option>
                        <option value="OCT">OCT</option>
                        <option value="NOV">NOV</option>
                        <option value="DEC">DEC</option>
                    </select>
                </div>
                <h2>Mettre une image</h2>
                    <div class="img_container">

                    </div>
                    <button>Envoyer</button>
                <h2>Contenu</h2>
                <textarea name="content" id="" cols="30" rows="20"></textarea>
                <button class="finish">Terminer</button>
            </form>
        </div>
    </section>        
    </body>
    <script defer>
        var select = document.querySelector('select');
        var eventForm = document.querySelector('#event');
        var blogForm = document.querySelector('#blog');
        select.addEventListener('change',()=>{
            if(select.value == "blog"){
                blogForm.style.display = "flex";
                if(eventForm.style.display = "flex"){
                    eventForm.style.display = "none";
                }
            }
            else if(select.value == "event"){
                eventForm.style.display = "flex";
                if(blogForm.style.display = "flex"){
                    blogForm.style.display = "none";
                }
            }
        })
    </script>
</html>