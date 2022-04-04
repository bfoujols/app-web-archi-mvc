<?php
require __DIR__ . '/../vendor/autoload.php';

use Quizz\DebugHandler;
use Quizz\Model\questionnaireModel;
use Quizz\Service\bddService;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// Connect Mysql
$connect = bddService::getConnect();

// Obj connect Mysql -> Obj Questionnaire
$questionnaireModel = new questionnaireModel();

// je teste la variable GET /?id
if (isset($_GET["id"])) {
    $resultQuestionnaire = $questionnaireModel->getFechId((int) $_GET["id"]);
    echo $resultQuestionnaire->getLibelleQuestionnaire() . " (" . $resultQuestionnaire->getIdQuestionnaire() . ")<br>";
    echo '<a href="/">Retour</a>';
}
// Si y a pas de GET alors j'affiche tout
else {
    $resultQuestionnaires = $questionnaireModel->getFechAll();
    foreach ($resultQuestionnaires as $questionnaire)
    {
        echo '<a href="/?id=' . $questionnaire->getIdQuestionnaire() . '">' . $questionnaire->getLibelleQuestionnaire() . "</a><br>";
    }
}

