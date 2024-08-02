<?php $page_id = 1;
require "@tyrositeframework/start.php"; ?>

<header> <?php $cp_navbar(); ?> </header>

<main>
    <?php $cp_hero(); ?>

    <section id="premium-content">
        <div class="container">
            <div class="intro text-center">
                <h2>Explorez Les Fonctionnalités Premium</h2>
                <p>Suite logicielle unique et puissante pour gérer l'ensemble de votre entreprise, présentée par une entreprise ayant une vision à long terme pour transformer votre façon de travailler. </p>
            </div>
            <div class="cards">
                <div class="content-card">
                    <div class="icon icon1">
                        <i class="ri-settings-4-line"></i>
                    </div>
                    <h3>Paramètres Puissants</h3>
                    <p>Fournir un Excellent Service Client. Répondez à Plus de Tickets.</p>
                </div>
                <div class="content-card bg-white shadow">
                    <div class="icon icon2">
                        <i class="ri-user-settings-line"></i>
                    </div>
                    <h3>Facile À Utiliser</h3>
                    <p>Utilisez la Chronologie pour Planifier les Projets en fonction de la façon dont les pièces s'emboitent.</p>
                </div>
                <div class="content-card">
                    <div class="icon icon3">
                        <i class="bi bi-patch-check"></i>
                    </div>
                    <h3>Plateforme Intégrée</h3>
                    <p>Google, Notion, Microsoft</p>
                </div>
            </div>
    </section>
    <?php $cp_leads(); ?>
    <?php $cp_crm(); ?>
</main>

<style>
    #premium-content {

        .intro {
            padding: 50px 100px 0 100px;
        }

        .intro h2 {
            font-family: "Jost", sans-serif;
            font-style: SemiBold;
            color: #333;
        }

        .intro p {
            font-family: "Open Sans", sans-serif;
            color: #4e4e4e;
            padding: 0 80px 0 80px;
        }

        .cards {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            padding: 0 40px 100px 40px;
            width: 100%;
        }

        .content-card {
            background-color: #f5f5f5;
            border-radius: 10px;
            padding: 20px 70px 0 25px;
            text-align: center;
            width: 30%;
        }

        .content-card h3 {
            font-family: "Jost", sans-serif;
            font-style: SemiBold;
            color: #333;
            text-align: left;
            white-space: nowrap;
            font-size: 20px;

        }

        .content-card p {
            font-family: "Open Sans", sans-serif;
            color: #4e4e4e;
            text-align: left;
            font-size: 15px
        }

        .content-card i {
            position: relative;
            font-size: 3rem;
            color: #333;
            text-align: left;
            z-index: 1;
        }

        .content-card .icon {
            position: relative;
            text-align: left;
            padding-bottom: 10px;
        }

        .content-card .icon::before {
            content: '';
            position: absolute;
            top: 58%;
            left: 15%;
            transform: translate(-50%, -50%);
            width: 35px;
            height: 35px;
            background-color: black;
            border-radius: 50%;
            z-index: 1;
        }

        .content-card .icon1::before {
            background-color: #b1e8f2;
        }

        .content-card .icon2::before {
            background-color: #fad7c9;
        }

        .content-card .icon3::before {
            background-color: #f5c9e9;
        }

        @media (min-width: 768px) and (max-width: 1023px) {

            .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .cards {
                flex-direction: column;
                align-items: center;
                padding: 50px;
                width: 100%;
            }

            .content-card {
                width: 100%;
                margin: 10px 0 10px 0;
                padding: 20px;
            }

            .content-card h3,
            p {
                text-align: center;
            }

            .content-card .icon {
                text-align: center;
            }

            .content-card .icon::before {
                top: 55%;
                left: 53%;
                transform: translate(-50%, -50%);
            }
        }


        @media (max-width: 768px) {

            .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .intro {
                padding: 0 80px 0 80px;
            }

            .intro p {
                padding: 0 20px 0 20px;
            }

            .cards {
                padding: 0 20px 0 20px;
                flex-direction: column;
                align-items: center;
            }

            .content-card {
                width: 100%;
                margin: 10px 0 10px 0;
                padding: 20px;
            }

            .content-card h3 {
                text-align: center;
            }

            .content-card p {
                text-align: center;
            }

            .content-card .icon {
                text-align: center;
            }

            .content-card .icon::before {
                top: 55%;
                left: 53%;
                transform: translate(-50%, -50%);
            }
        }
    }
</style>


<?php $js_exemple(); ?>

<footer><?php $cp_footer(); ?></footer>








<?php require "@tyrositeframework/end.php"; ?>