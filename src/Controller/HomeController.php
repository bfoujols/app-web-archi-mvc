<?php

namespace Quizz\Controller;

use Quizz\Core\Controller\Request;
use Quizz\Core\View\TwigCore;
use Quizz\Model\questionnaireModel;
use Quizz\Core\Controller\ControllerInterface;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HomeController implements ControllerInterface
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function execute(Request $request)
    {
        $twig = TwigCore::getEnvironment();

        echo $twig->render('home/home.html.twig', [
            'visu' => false
        ]);
    }
}