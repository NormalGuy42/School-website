<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
        .presentation{
            height: 400px;
            width: 100%;
            background: url('../assets/money.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }
        .title h1{
            font-size: 48px;
        }
        /* .showInfo{
            display: block !important;
        } */
        .info{
            display: flex;
            width: 100%;
            justify-content: center;
        }
        .tab button{
            width: 220px;
            padding: 10px;
            color: white;
            background-color: darkblue;
            cursor: pointer;
            font-size: 18px;
        }
        .tab_info{
            display: none;
            position: absolute;
            left: 0;
            padding: 32px;
            width: 58%;
        }
        .tab_info[data-active="true"]{
            display: block !important;
        }
        button[data-btn-active="true"]{
            background-color: white;
            color: darkblue;
        }
        /*Collapsable section start*/
        .tab_info h2{
            margin: 12px;
            color: red;
            text-decoration: underline;
        }
        .tab_info ul{
            padding: 0 20px;
            box-sizing: border-box;
        }
        /*Collapsable section end*/
        .submit_application{
            display: flex;
            justify-content: center;
            padding: 15px;
            position: absolute;
            top: 600px;
            right: 0;
            width: 320px;
            background-color: #0202a9;
        }
        .submit_application button{
            padding: 10px;
            background-color: #64a70b;
            border-color: #64a70b ;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        @media (max-width:900px) {
            .info{
                flex-direction: column;
                text-align: center;
                margin-bottom: 30px;
            }
            .space{
                display: none;
            }
            .tab_info{
                position: unset;
                text-align: start;
                width: 100%;
                box-sizing: border-box;
            }
            .submit_application{
                position: sticky;
                bottom: 0 ;
                background-color: white;
                width: 100%;
                box-sizing: border-box;
            }
            /*Collapsable section start*/
            .tab_info li{
                margin-bottom: 7px;
            }
            /*Collapsable section end*/
        }
    </style>
</head>
<body>
    <div class="presentation">
        <!-- header start   -->
        <?php include('../templates/iuheg_header.php')?>
        <!-- header end -->
    </div>
    <section>
        <div class="title">
            <h1>Business Administration</h1>
        </div>
            <div class="info">
                <div class="tab">
                    <button data-btn-active="true">Présentation</button>
                    <section class="tab_info" data-active="true">
                        <h2>DETAILS DU PROGRAMME</h2>
                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellat molestiae 
                                est qui et tempore placeat, nostrum reiciendis accusantium ea.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellat molestiae 
                                est qui et tempore placeat, nostrum reiciendis accusantium ea.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellat molestiae 
                                est qui et tempore placeat, nostrum reiciendis accusantium ea.</li>
                        </ul>
                    </section>
                    <!--Added this div here so that the absolutely positioned section doesn't overlap with the footer-->
                    <div class="space" style="height: 800px;"></div>
                </div>
                <div class="tab">
                    <button>Structure du programme</button>
                    <section class="tab_info">
                        <h2>Structure</h2>
                    </section>
                </div>
                <div class="tab">
                    <button>Admission</button>
                    <section class="tab_info">
                        <h2>CONDITIONS D'ADMISSION</h2>

                    </section>
                </div>
                <div class="tab">
                    <button>Frais de scolarité</button>
                    <section class="tab_info">
                        <h2>Scolarité</h2>
                    </section>
                </div>
            </div>
            <div class="submit_application">
                <a href="application.php">
                    <button>Déposez votre demande</button>
                </a>
            </div>
    </section>
    <!--Footer start-->
    <?php include('../templates/iuheg_footer.php')?>
    <!--Footer end-->
    <script defer>
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab=>{
            tab.addEventListener('click',(e)=>{
                if(e.target.closest('button')){
                    const section = tab.querySelector('.tab_info');
                    //Delete previous active section
                    const activeSection = document.querySelector('[data-active="true"]');
                    const activeBtn = document.querySelector('[data-btn-active="true"]');
                    delete activeSection.dataset.active;
                    delete activeBtn.dataset.btnActive;
                    //toggle show for each section
                    if(!section.dataset.active){
                        section.dataset.active = true;
                        section.previousElementSibling.dataset.btnActive = true;
                    }
                    else if(section.dataset.active = true){
                        delete section.dataset.active;
                    }
                }
            })
        })
    </script>
</body>
</html>