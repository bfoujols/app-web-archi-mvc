<?php

namespace Apps\Controller\Questionnaire;

use Apps\Core\Controller\ControllerInterface;
use Apps\Core\Controller\Request;
use Apps\Core\View\TwigCore;
use Apps\Model\QuestionnaireModel;
use Apps\Error\LoaderError;
use Apps\Error\RuntimeError;
use Apps\Error\SyntaxError;

class ViewController implements ControllerInterface
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

        // je teste la variable GET /?id
        if ($request->get("id") !== null) {
            return TwigCore::getEnvironment()->render(
                'questionnaire/questionnaire.html.twig',
                [
                    'questionnaire' => $questionnaireModel->getFechId((int) $request->get("id"))
                ]);
        }

        return null;
    }
}