<?php

namespace Apps\Model;

use Apps\Core\Service\DatabaseService;
use Apps\Entity\Questionnaire;

class QuestionnaireModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = DatabaseService::getConnect();
    }

    /**
     * @return array
     */
    public function getFechAll()
    {
        $requete = $this->bdd->prepare('SELECT * FROM questionnaire');
        $requete->execute();
        $tabQuestionnaire = [];

        foreach ($requete->fetchAll() as $value)
        {
            $questionnaire = new Questionnaire();
            $questionnaire->setIdQuestionnaire($value["idQuestionnaire"]);
            $questionnaire->setLibelleQuestionnaire($value["libelleQuestionnaire"]);
            $tabQuestionnaire[] = $questionnaire;
        }

        return $tabQuestionnaire;
    }

    /**
     * @param int $id
     * @return Questionnaire
     */
    public function getFechId(int $id)
    {
        $requete = $this->bdd->prepare('SELECT * FROM questionnaire where idQuestionnaire = ' . $id);
        $requete->execute();
        $result = $requete->fetch();

        $questionnaire = new Questionnaire();
        $questionnaire->setIdQuestionnaire($result["idQuestionnaire"]);
        $questionnaire->setLibelleQuestionnaire($result["libelleQuestionnaire"]);

        return  $questionnaire;
    }

}