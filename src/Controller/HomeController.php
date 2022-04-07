<?php

namespace Quizz\Controller;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\QuestionnaireModel;
use Twig\Environment;

class HomeController implements ControllerInterface
{

    public function inputRequest(array $tabInput)
    {
        // Nulle :)
    }

    public function outputEvent()
    {
        // Si y a pas de GET alors j'affiche tout
        return TwigCore::getEnvironment()->render(
            'home/home.html.twig',
            []);
    }
}