<?php 
class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //Métodos
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setstatus(true);

        if ($t == "CC") {
            $this->setSaldo(50);
        }elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->getsaldo() > 0) {
            echo "Tem dinheiro";
        }elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito</p>";
        }else {
            $this->setStatus(false);
            echo "Conta fechada de ". $this->getDono() . "com sucesso!";
        }
    }
    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setStatus($this->getStatus() + $v);
            echo"deposito de $v";
        }else {
            echo "<p>Conta fechada. Não consigo depositar!</p>";
        }
    }
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
            }else {
                echo "<p>Saldo insuficiente!</p>";
            }
            }else {
                echo "<p>Impossivel sacar!</p>";
        }
    }
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        }elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
        }else {
            echo "<p>Problemas com a conta!</p>";
        }
    }
    //Métodos Especiais
    public function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);

        echo "<p>Conta criada com sucesso!</p>"; //Não é recomendado usar 
    }
    public function setNumConta($n) {
        $this->numConta = $n;
    }
    public function getNumConta() {
        return $this->numConta;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo; 
    }
    public function getTipo () {
        return $this->tipo;
    }
    public function setDono($dono) {
        $this->dono = $dono;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
    public function getStatus() {
        return $this->status;
    }
}