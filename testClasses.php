<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    require_once 'Classes/Chercheur_UTT.php';
    $jg = new Chercheur_UTT(null, 'Le Mercier', 'Jean-Gabriel', 'ISI', 'login', 'mdp');
    $jg->verificationAuteurBase($jg);

