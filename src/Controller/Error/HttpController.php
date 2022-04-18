<?php

namespace Quizz\Controller\Error;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\QuestionnaireModel;

class HttpController implements ControllerInterface
{

    public function inputRequest(array $tabInput)
    {
        // Nulle :)
    }

    public function outputEvent()
    {
        // Si y a pas de GET alors j'affiche tout
        return TwigCore::getEnvironment()->render(
            'error/http-404.html.twig',
            []);
    }
}