<?php

namespace Quizz\Controller;

use Quizz\Core\View\TwigCore;
use Quizz\Model\questionnaireModel;
use Quizz\Core\Controller\ControllerInterface;

class HomeController implements ControllerInterface
{
    public function inputRequest(array $tabInput)
    {
        // TODO: Implement inputRequest() method.
    }

    public function outputEvent()
    {
        $twig = TwigCore::getEnvironment();
        // Obj connect Mysql -> Obj Questionnaire
        $questionnaireModel = new questionnaireModel();

        echo $twig->render('home/home.html.twig', [
            'result' => $questionnaireModel->getFechAll(),
            'visu' => false
        ]);
    }
}