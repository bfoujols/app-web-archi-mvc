<?php

namespace Quizz\Controller\Questionnaire;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\QuestionnaireModel;

class ViewController implements ControllerInterface
{
    private $id;

    public function inputRequest(array $tabInput)
    {
        if (isset($tabInput["VARS"]["id"])) {
            $this->id = $tabInput["VARS"]["id"];
        }
    }

    public function outputEvent()
    {
        // Obj connect Mysql -> Obj Questionnaire
        $questionnaireModel = new QuestionnaireModel();

        // je teste la variable GET /?id
        if (isset($this->id)) {
            return TwigCore::getEnvironment()->render(
                'questionnaire/questionnaire.html.twig',
                [
                    'questionnaire' => $questionnaireModel->getFechId((int) $this->id)
                ]);
        } else {
            return null;
        }
    }
}