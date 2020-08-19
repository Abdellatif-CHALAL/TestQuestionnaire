<?php
class Question
{
    private $question;
    private $reponses;
    private $explication;

    function __construct($question)
    {
        $this->question = $question;
        $this->reponses =  array();
    }
    public function getQuestion()
    {
        return $this->question;
    }

    public function getReponses()
    {
        return $this->reponses;
    }

    public function getExplications()
    {
        return $this->explication;
    }

    public function setExplications($explication)
    {
        return $this->explication = $explication;
    }


    public function ajouterReponse($reponse)
    {
        array_push($this->reponses, $reponse);
    }
}
