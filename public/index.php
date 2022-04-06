<?php
require __DIR__ . '/../vendor/autoload.php';

use Quizz\DebugHandler;
use Quizz\Model\questionnaireModel;
use Quizz\Service\bddService;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$loader = new FilesystemLoader(__DIR__ . '/../templates');

$twig = new Environment($loader, [
    //'cache' => '/path/to/compilation_cache',
]);

// Obj connect Mysql -> Obj Questionnaire
$questionnaireModel = new questionnaireModel();

// je teste la variable GET /?id
if (isset($_GET["id"])) {
    echo $twig->render('resultat.html.twig', [
        'result' => $questionnaireModel->getFechId((int) $_GET["id"])
    ]);
}
// Si y a pas de GET alors j'affiche tout
else {
    echo $twig->render('home.html.twig', [
        'result' => $questionnaireModel->getFechAll(),
        'visu' => false
    ]);
}

