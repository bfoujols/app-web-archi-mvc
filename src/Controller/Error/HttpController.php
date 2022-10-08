<?php

namespace Quizz\Controller\Error;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\Controller\Request;
use Quizz\Core\View\TwigCore;
use Quizz\Model\QuestionnaireModel;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HttpController implements ControllerInterface
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function execute(Request $request)
    {
        // Si y a pas de GET alors j'affiche tout
        return TwigCore::getEnvironment()->render(
            'error/http-404.html.twig',
            []);
    }
}