<?php
class Person
{
    private $nome;
    private $cognome;
    private $dataNascita;
    private $luogoNascita;
    private $codiceFiscale;

    public function __construct($nome, $cognome, $dataNascita, $luogoNascita, $codiceFiscale)
    {
        $this->setNome($nome);
        $this->setCognome($cognome);
        $this->setDataNascita($dataNascita);
        $this->setLuogoNascita($luogoNascita);
        $this->setCodiceFiscale($codiceFiscale);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }
    public function getDataNascita()
    {
        return $this->dataNascita;
    }
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;
    }
    public function getLuogoNascita()
    {
        return $this->luogoNascita;
    }
    public function setLuogoNascita($luogoNascita)
    {
        $this->luogoNascita = $luogoNascita;
    }
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;
    }

    public function getHtml()
    {
        return 'Nome: ' . $this->getNome()
            . '<br> Cognome: ' . $this->getCognome()
            . '<br> Data di nascita: ' . $this->getDataNascita()
            . '<br> Luogo di nascita: ' . $this->getLuogoNascita()
            . '<br> Codice fiscale: ' . $this->getCodiceFiscale();
    }
}
