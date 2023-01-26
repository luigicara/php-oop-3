<?php
class Salary
{
    private $mensile;
    private $tredicesima;
    private $quattordicesima;

    public function __construct($mensile, $tredicesima, $quattordicesima)
    {
        $this->setMensile($mensile);
        $this->setTredicesima($tredicesima);
        $this->setQuattordicesima($quattordicesima);
    }

    public function getMensile()
    {
        return $this->mensile;
    }
    public function setMensile($mensile)
    {
        $this->mensile = $mensile;
    }
    public function getTredicesima()
    {
        return $this->tredicesima;
    }
    public function setTredicesima($tredicesima)
    {
        $this->tredicesima = $tredicesima;
    }
    public function getQuattordicesima()
    {
        return $this->quattordicesima;
    }
    public function setQuattordicesima($quattordicesima)
    {
        $this->quattordicesima = $quattordicesima;
    }

    public function getHtml()
    {
        return
            'Stipendio: '
            . $this->getMensile()
            . '<br> Tredicesima: '
            . $this->getTredicesima()
            . '<br> Quattordicesima: '
            . $this->getQuattordicesima();
    }

    public function getAnnuale()
    {
        $tredicesima = $this->getTredicesima() == 'si' ? $this->getMensile() : 0;
        $quattordicesima = $this->getQuattordicesima() == 'si' ? $this->getMensile() : 0;
        return $this->getMensile() * 12 + $tredicesima + $quattordicesima;
    }
}