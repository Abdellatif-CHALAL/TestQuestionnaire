<?php
class Qcm
{
    private $appreciations;
    public $questions;

    function __construct()
    {
        $this->questions =  array();
        $this->appreciations =  array("1-10" => "pas trop de tout", "10-20" => "Très bieN");
    }
    public function getAppreciations()
    {
        return $this->appreciations;
    }

    public function setAppreciation($appreciations)
    {
        return $this->appreciations = $appreciations;
    }

    public function ajouterQuestion($question)
    {
        array_push($this->questions, $question);
    }

    public function generer()
    {
        return "Qcm est bien générer";
    }
}
