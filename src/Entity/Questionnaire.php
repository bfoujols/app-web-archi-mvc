<?php

namespace Apps\Entity;

class Questionnaire
{
    private $idQuestionnaire = 0;
    private $libelleQuestionnaire = "";

    /**
     * @return int
     */
    public function getIdQuestionnaire(): int
    {
        return $this->idQuestionnaire;
    }

    /**
     * @param int $idQuestionnaire
     */
    public function setIdQuestionnaire(int $idQuestionnaire): void
    {
        $this->idQuestionnaire = $idQuestionnaire;
    }

    /**
     * @return string
     */
    public function getLibelleQuestionnaire(): string
    {
        return $this->libelleQuestionnaire;
    }

    /**
     * @param string $libelleQuestionnaire
     */
    public function setLibelleQuestionnaire(string $libelleQuestionnaire): void
    {
        $this->libelleQuestionnaire = $libelleQuestionnaire;
    }

}