<?php
require_once __DIR__ . '/Person.php';

class Boss extends Person
{
    private $dividendo;
    private $bonus;

    public function __construct($nome, $cognome, $dataNascita, $luogoNascita, $codiceFiscale, $dividendo, $bonus)
    {
        parent::__construct($nome, $cognome, $dataNascita, $luogoNascita, $codiceFiscale);
        $this->setDividendo($dividendo);
        $this->setBonus($bonus);
    }

    public function getDividendo()
    {
        return $this->dividendo;
    }
    public function setDividendo($dividendo)
    {
        $this->dividendo = $dividendo;
    }
    public function getBonus()
    {
        return $this->bonus;
    }
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }

    public function getRedditoAnnuale()
    {
        return $this->getDividendo() * 12 + $this->getBonus();
    }

    public function getHtml()
    {
        $html = parent::getHtml();
        $html .= '<br> Dividendo: ' . $this->getDividendo()
                . '<br> Bonus: ' . $this->getBonus()
                . '<br> Reddito: ' . $this->getRedditoAnnuale();
        return $html;
    }
}