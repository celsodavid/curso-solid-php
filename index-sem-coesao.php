<?php

require_once 'vendor/autoload.php';

class Carro
{
    public $marca;
    public $modelo;

    public function andar(): string
    {
        return 'andar';
    }

    public function buzinar(): string
    {
        return 'buzinar';
    }
}

class OfficinaMecanica
{
    /**
     * @var Carro[]
     */
    public array $carros = [];

    public function __construct(array $carros)
    {
        $this->carros = $carros;
    }

    public function consertarCarrros()
    {
        foreach ($this->carros as $carro) {
            printf('Concertando o carro %s', $carro->marca);
        }
    }

    public function criarOrcamentoCarrros()
    {
        foreach ($this->carros as $carro) {
            printf('Criando Orçamento do carro %s', $carro->marca);
        }
    }

    public function criarNFCarrros()
    {
        foreach ($this->carros as $carro) {
            printf('Criando Nota fiscal do carro %s', $carro->marca);
        }
    }


    public function lancarNoFinanceiro()
    {
        foreach ($this->carros as $carro) {
            printf('Lançar no Financeiro o carro %s', $carro->marca);
        }
    }
}