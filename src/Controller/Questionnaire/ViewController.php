<?php

namespace Quizz\Controller\Questionnaire;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\Controller\Request;
use Quizz\Core\View\TwigCore;
use Quizz\Model\QuestionnaireModel;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

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