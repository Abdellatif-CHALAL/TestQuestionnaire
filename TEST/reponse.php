<?php

class Reponse
{
    public static $BONNE_REPONSE = 1;
    private $desciptReponse;
    private $bonneReponse;


    public function __construct($desciptReponse, $bonneReponse = 0)
    {
        $this->bonneReponse = $bonneReponse;
        $this->desciptReponse = $desciptReponse;
    }

    public function getDesciptReponse()
    {
        return $this->desciptReponse;
    }

    public function getBonneReponse()
    {
        return $this->bonneReponse;
    }
}
