<?php
require_once __DIR__ . '/Person.php';

class Employee extends Person
{
    private $stipendio;
    private $dataAssunzione;

    public function __construct($nome, $cognome, $dataNascita, $luogoNascita, $codiceFiscale, $stipendio, $dataAssunzione)
    {
        parent::__construct($nome, $cognome, $dataNascita, $luogoNascita, $codiceFiscale);

        $this->setStipendio($stipendio);
        $this->setDataAssunzione($dataAssunzione);
    }

    public function getStipendio()
    {
        return $this->stipendio;
    }
    public function setStipendio($stipendio)
    {
        $this->stipendio = $stipendio;
    }
    public function getDataAssunzione()
    {
        return $this->dataAssunzione;
    }
    public function setDataAssunzione($dataAssunzione)
    {
        $this->dataAssunzione = $dataAssunzione;
    }

    public function getStipendioAnnuale()
    {
        return $this->getStipendio()->getAnnuale();
    }

    public function getHtml()
    {
        $html = parent::getHtml();
        $html .= '<br> Data di assunzione: '
                . $this->getDataAssunzione()
                . '<br> Stipendio annuale: '
                . $this->getStipendioAnnuale();
        return $html;
    }
}