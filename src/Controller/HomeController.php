<?php

namespace Quizz\Controller;

use Quizz\Model\questionnaireModel;
use Quizz\Service\TwigService;
use Quizz\Core\Controller\ControllerInterface;

class HomeController implements ControllerInterface
{
    public function inputRequest(array $tabInput)
    {
        // TODO: Implement inputRequest() method.
    }

    public function outputEvent()
    {
        $twig = TwigService::getEnvironment();
        // Obj connect Mysql -> Obj Questionnaire
        $questionnaireModel = new questionnaireModel();

        echo $twig->render('home/home.html.twig', [
            'result' => $questionnaireModel->getFechAll(),
            'visu' => false
        ]);
    }
}