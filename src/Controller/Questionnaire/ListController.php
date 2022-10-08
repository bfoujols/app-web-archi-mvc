<?php

namespace Quizz\Controller\Questionnaire;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\Controller\Request;
use Quizz\Core\View\TwigCore;
use Quizz\Model\QuestionnaireModel;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ListController implements ControllerInterface
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function execute(Request $request)
    {
        // Obj connect Mysql -> Obj Questionnaire
        $questionnaireModel = new QuestionnaireModel();


        // Si y a pas de GET alors j'affiche tout
        return TwigCore::getEnvironment()->render(
            'questionnaire/list.html.twig',
            [
                'questionnaires' => $questionnaireModel->getFechAll(),
                'prenom' => 'benoit'
            ]);
    }
}