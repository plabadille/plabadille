<?php
$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$nav = file_get_contents('views/templates/nav.phtml');

switch ($action) {
    case 'home':
        $title = 'Accueil'; //header
        $pageTitle = 'Accueil de mon site personnel'; //h1
        $main = file_get_contents('views/pages/home.html');
        break;
    case 'skills':
        $title = 'Mes compétences'; //header
        $pageTitle = 'CV interactif'; //h1
        $main = file_get_contents('views/pages/skills.html');
        break;
    case 'projects':
        $title = 'Mes réalisations'; //header
        $pageTitle = 'Mes réalisations'; //h1
        $main = file_get_contents('views/pages/projects.html');
        break;
    case 'stages':
        $title = 'Mes stages'; //header
        $pageTitle = 'Mes stages'; //h1
        $main = file_get_contents('views/pages/stages.html');
        break;
    case 'contact':
        $title = 'Contact'; //header
        $pageTitle = 'Vous souhaitez me contacter?'; //h1
        $main = file_get_contents('views/pages/contact.html');
        break;

    default:
        $title = 'Accueil';
        $pageTitle = 'Accueil de mon site personnel'; //h1
        $mess = 'Désolé, cette page n\'existe pas ou n\'est pas accessible.';
        $main = file_get_contents('views/pages/home.html');
        break;
}

$title .= ' - PLabadille';

include('views/base.phtml');