<?php $page_id = 2;
require "@tyrositeframework/start.php"; ?>

<?php
$form_type = isset($_GET['form']) ? $_GET['form'] : 'login';

$forms = [
    'login' => [
        'title' => "Se connecter",
        'description' => "Formulaire de connexion à votre CRM",
        'heading' => "Se connecter",
        'subheading' => "Veuillez remplir toutes les informations de ce formulaire.",
        'content' => '
            <input type="text" name="url" placeholder="Url de la société">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="mdp" placeholder="Entrer votre mot de passe">
            <button type="submit" class="btn btn-sm">Envoyer</button>
        ',
        'action' => 'https://api.nexumiacrm.fr/connect.php',
        'method' => 'POST'
    ],
    'contact' => [
        'title' => "Nous contacter",
        'description' => "Contactez-nous pour toute question.",
        'heading' => "Nous contacter",
        'subheading' => "N'hésitez pas à nous contacter pour toute question.",
        'content' => '
            <input type="text" name="name" placeholder="Nom">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="context" placeholder="Sujet">
            <textarea placeholder="Message" name="message"></textarea>
            <button type="submit" class="btn btn-sm">Envoyer</button>
        ',
        'action' => 'https://formspree.io/f/xanwvrgp',
        'method' => 'POST'
    ],
    'quote' => [
        'title' => "Faire un devis",
        'description' => "Si vous souhaitez obtenir un devis, veuillez remplir le formulaire ci-dessous.",
        'heading' => "Faire un devis",
        'subheading' => "Nous vous fournirons un devis détaillé dans les plus brefs délais.",
        'content' => '
            <input type="text" name="company" placeholder="Nom de la société">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="context" placeholder="Sujet">
            <textarea placeholder="Description du projet" name="desc"></textarea>
            <button type="submit" class="btn btn-sm">Envoyer</button>
        ',
        'action' => 'https://formspree.io/f/mldrzqya',
        'method' => 'POST'
    ],
];

$current_form = $forms[$form_type];

?>

<header> <?php $cp_navbar(); ?> </header>

<main>
    <section id="formulaire">
        <div class="container">
            <div class="intro text-center">
                <h1><?= $current_form['title']; ?></h1>
                <p><?= $current_form['description']; ?></p>
            </div>
            <div class="bg-color"></div>
            <div class="form-box shadow">
                <div class="title-form text-center">
                    <h2><?= $current_form['heading']; ?></h2>
                    <p><?= $current_form['subheading']; ?></p>
                </div>
                <form action="<?= $current_form['action']; ?>" method="<?= $current_form['method']; ?>">
                    <?= $current_form['content']; ?>
                </form>
            </div>
        </div>
    </section>
</main>

<style>
    #formulaire {

        display: flex;
        flex-direction: column;
        align-items: center;
        padding-bottom: 90px;
        position: relative;

        .intro {
            padding: 50px 100px 80px 100px;
        }

        .intro h1 {
            font-family: "Jost", sans-serif;
            font-style: Bold;
            color: #333;
        }

        .bg-color {
            background: #6a5acd;
            width: calc(100% - 230px);
            height: 350px;
            position: absolute;
            top: 200px;
            left: 115px;
            z-index: -1;
            border-radius: 20px;
        }

        .intro p {
            font-family: "Open Sans", sans-serif;
            color: #4e4e4e;
            padding: 10px 80px 0 80px;
        }

        .form-box {
            background-color: #F6F7FA;
            padding: 40px 60px 10px 60px;
            margin: 50px auto;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-box h2 {
            margin-top: 0;
            font-family: "Jost", sans-serif;
            font-style: Bold;
            color: #333;
        }

        .form-box p {
            padding: 10px 0 10px 0;
            font-size: 0.9em;
            color: #666;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form input,
        form textarea {
            margin: 10px 20px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        form button {
            padding: 10px;
            font-size: 1em;
            color: white;
            background-color: #333;
            border: none;
            border-radius: 4px;
            margin: 10px 130px;
        }

        @media (min-width: 768px) and (max-width: 1023px) {

            .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .intro {
                padding: 40px 60px 80px 60px;
            }

            .intro p {
                padding: 0 60px 0 60px;
            }

            .bg-color {
                width: calc(100% - 120px);
                left: 60px;
                height: 300px;
                top: 250px;
            }

            .form-box {
                width: 80%;
                padding: 40px 30px 10px 30px;
            }

            form input,
            form textarea {
                margin: 10px 0;
            }

            form button {
                margin: 10px 50px;
            }
        }

        @media (max-width: 768px) {

            .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .intro {
                padding: 20px 15px 20px 20px;
            }

            .bg-color {
                width: calc(100% - 40px);
                left: 20px;
                height: 250px;
                top: 190px;
            }

            .form-box {
                width: 100%;
                padding: 20px 30px 10px 30px;
            }

            form input,
            form textarea {
                margin: 10px 0;
            }

            form button {
                margin: 10px 20px;
            }

        }
    }
</style>

<footer><?php $cp_footer(); ?></footer>

<?php require "@tyrositeframework/end.php"; ?>