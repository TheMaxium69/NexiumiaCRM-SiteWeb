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
                    <i class="ri-settings-4-line"></i>
                    <h3>Paramètres Puissants</h3>
                    <p>Fournir un Excellent Service Client. Répondre à Plus de Tickets.</p>
                </div>
                <div class="content-card">
                    <i class="ri-user-settings-line"></i>
                    <h3>Facile à Utiliser</h3>
                    <p>Utilisez la Chronologie pour Planifier les Projets...</p>
                </div>
                <div class="content-card">
                    <i class="bi bi-patch-check"></i>
                    <h3>Plateforme Intégrée</h3>
                    <p>Google, Notion, Microsoft</p>
                </div>
            </div>
    </section>
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
            color: #666;
        }

        .cards {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            padding: 0 50px 100px 50px;
        }

        .content-card {
            background-color: #f5f5f5;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 30%;
        }

        .content-card i {
            font-size: 3rem;
            color: #333;
        }


        @media (max-width: 768px) {

            .intro {
                padding: 0 100px 0 100px;
            }

            .cards {
                padding: 0 20px 100px 20px;
                flex-direction: column;
                align-items: center;
            }

            .content-card {
                width: 100%;
                margin: 10px 0 10px 0;
                padding: 20px;
            }
        }
    }
</style>


<?php $js_exemple(); ?>

<footer><?php $cp_footer(); ?></footer>








<?php require "@tyrositeframework/end.php"; ?>