<?php

namespace Apps\Entity;

class Question
{
    private $idQuestion = 0;
    private $libelleQuestion = "";
    private $type = 0;
    private $nbReponse = 0;
    private $nbBonneReponse = 0;

    /**
     * @return int
     */
    public function getIdQuestion(): int
    {
        return $this->idQuestion;
    }

    /**
     * @param int $idQuestion
     */
    public function setIdQuestion(int $idQuestion): void
    {
        $this->idQuestion = $idQuestion;
    }

    /**
     * @return string
     */
    public function getLibelleQuestion(): string
    {
        return $this->libelleQuestion;
    }

    /**
     * @param string $libelleQuestion
     */
    public function setLibelleQuestion(string $libelleQuestion): void
    {
        $this->libelleQuestion = $libelleQuestion;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getNbReponse(): int
    {
        return $this->nbReponse;
    }

    /**
     * @param int $nbReponse
     */
    public function setNbReponse(int $nbReponse): void
    {
        $this->nbReponse = $nbReponse;
    }

    /**
     * @return int
     */
    public function getNbBonneReponse(): int
    {
        return $this->nbBonneReponse;
    }

    /**
     * @param int $nbBonneReponse
     */
    public function setNbBonneReponse(int $nbBonneReponse): void
    {
        $this->nbBonneReponse = $nbBonneReponse;
    }



}