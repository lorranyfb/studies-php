<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        if($this->peso < 52.2) {
            $this->categoria = "Inválido";
        }elseif($this->peso <= 70.3) {
            $this->peso = "Leve";
        }elseif($this->peso <= 83.9) {
            $this->peso = "Médio";
        }elseif($this->peso <= 120.2) {
            $this->peso = "Pesado";
        }else {
            $this->peso = "Inválido";
        }

    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setEmpates($empates) {
        $this->empates = $empates;
    }

    public function apresentar() {
        echo "<p>---------------</p>";
        echo "<p>CHEGOU A HORA!";
        echo "<p>Lutador: " .$this->getNome(). "Veio do " .$this->getNacionalidade(). ", tem " .$this->getIdade() . " anos e pesa " .$this->getPeso();
        echo "<br>Ele tem ". $this->getVitorias(). " vitórias, " . $this->getDerrotas() . " derrotas e ". $this->getEmpates(). " empates.";
    }
    public function status() {
        echo "<p>---------------</p>";
        echo "<p>" .$this->getNome(). " é um peso " .$this->getPeso();
        echo "<br>Já ganhou ". $this->getVitorias(). " vezes, já perdeu  " . $this->getDerrotas() . " vezes e empatou ". $this->getEmpates(). " vezes";
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}