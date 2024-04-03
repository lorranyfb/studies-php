<?php
require_once './Controlador.php';

class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    public function getVolume() {
        return $this->volume;
    }
    public function setVolume($volume) {
        $this->volume = $volume;
    }
    public function getLigado() {
        return $this->ligado;
    }
    public function setLigado($ligado) {
        $this->ligado = $ligado;  
    }
    public function getTocando() {
        return $this->tocando;
    }
    public function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "<br>Está ligado? " .($this->getLigado()) ? "SIM" : "NÃO";
        echo "<br>Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br>Volume: " . $this->getVolume();

        for($i=0; $i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
    }
    public function fecharMenu() {
        echo "<br> Fechando menu...";
    }
    public function maisVolume() {
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume() {
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play() {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}