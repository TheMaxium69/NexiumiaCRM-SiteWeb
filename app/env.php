<?php

/*************************
 *
 *    SYSTEME VARIABLE
 *
 ************************/

//prod OR dev
$APP_ENV = "dev";

// Link Variable
$SYSTEM_FRAMEWORK = "@tyrositeframework/";
$SYSTEM_COMPOSANT = "composant/";
$SYSTEM_EXTENSION = "file_extension/";
$SYSTEM_ASSETS = "file_assets/";
$SYSTEM_JAVASCRIPT = "file_javascript/";
$SYSTEM_CSS = "file_css/";

// Data
$DATABASE = "app/database." . $APP_ENV . ".php";
$SALT = "app/salt." . $APP_ENV . ".php";


/*************************
 *
 *     INIT VARIABLE
 *
 ************************/

//Variable GLOBAL
$env_name = "NexiumiaCRM";
$env_logo = $SYSTEM_ASSETS . "logo.png";
$env_url = "https://nexiumiacrm.fr"; /* for <meta> */
$env_desc = "NexiumiaCRM est une solution CRM complète développée par Tyrolium, conçue pour optimiser la gestion de la relation client et améliorer l'efficacité opérationnelle des entreprises."; /* for <meta> */
$env_lang = "fr"; /* for <html lang=""> */

// PAGE MANAGEMENT
$env_page = array(
    //404
    0 => "404 | " . $env_name,
    //Page
    1 => array(
        "title" => $env_name,
        "name" => "Accueil",
        "url" => "./",
        "css" => "index.css",
    ),
    2 => array(
        "title" => "Formulaire | " . $env_name,
        "name" => "Formulaire",
        "url" => "./formulaire.php",
        "css" => "formulaire.css",
    ),
    3 => array(
        "title" => "Mention Légal | " . $env_name,
        "name" => "Mention Légal",
        "url" => "./legal.php",
        "css" => "legal.css",
    ),
    4 => array(
        "title" => "CGU | " . $env_name,
        "name" => "CGU",
        "url" => "./cgu.php",
        "css" => "cgu.css",
    ),
    5 => array(
        "title" => "CGV | " . $env_name,
        "name" => "CGV",
        "url" => "./cgv.php",
        "css" => "cgv.css",
    )
);

// FILE CSS GLOBAL
$env_css_global = array(
    "all.css",
);

// FILE JS GLOBAL
$env_js_global = array(
    "start.js"
);

/*************************
 *
 *     YOUR VARIABLE
 *
 ************************/

