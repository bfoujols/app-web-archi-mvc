<?php

namespace Apps\Controller\Questionnaire;

use Apps\Core\Controller\ControllerInterface;
use Apps\Core\Controller\Request;
use Apps\Core\View\TwigCore;
use Apps\Model\QuestionnaireModel;
use Apps\Error\LoaderError;
use Apps\Error\RuntimeError;
use Apps\Error\SyntaxError;

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