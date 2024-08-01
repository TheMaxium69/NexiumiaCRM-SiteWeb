<?php $page_id = 1;
require "@tyrositeframework/start.php"; ?>

<header> <?php $cp_navbar(); ?> </header>

<main>
    <section id="hero">
        <div class="container">
            <div class="content col-lg-6">
                <h1>La Plateforme CRM Que Toute Votre Entreprise Adorera</h1>
                <p>Fournir Un Excellent Service Client, Répondre À Plus De Tickets Tout-En-Un Principalement Un Logiciel.</p>
                <div class="buttons">
                    <button>Commencer</button>
                    <button>Comment Ça Fonctionne</button>
                </div>
                <div class="awards">
                    <img src="file_assets/award.png" alt="5 Star Awards" width="100" height="100">
                    <p>5 Star Awards For Customer Services</p>
                </div>
            </div>
            <div class="background-images">
                <img class="bg-image chart1" src="file_assets/hero.png" alt="chart1">
            </div>
        </div>
    </section>


    <style>
        header {
            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        #hero {
            position: relative;
            padding: 200px 0;
            text-align: left;
            overflow: hidden;

            .container {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            #hero .content {
                position: relative;
                z-index: 2;
                max-width: 50%;
                padding: 40px 180px 0 160px;
            }

            h1 {
                font-size: 36px;
                color: #333;
            }

            p {
                font-size: 18px;
                color: #666;
            }

            .buttons {
                margin-top: 20px;
            }

            button {
                padding: 10px 20px;
                margin: 0 10px;
                border: none;
                background-color: #303030;
                color: #fff;
                cursor: pointer;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .awards {
                margin-top: 30px;
            }

            .background-images {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                pointer-events: none;
            }

            .background-images .bg-image {
                width: 100%;
                height: auto;
            }
        }
    </style>

</main>


<?php $js_exemple(); ?>








<?php require "@tyrositeframework/end.php"; ?>