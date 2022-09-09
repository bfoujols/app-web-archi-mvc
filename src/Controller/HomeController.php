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

        echo $twig->render('home/home.html.twig', [
            'visu' => false
        ]);
    }
}