<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    private string $nome;

    private string $descricao;

    private float $preco;

    public function getNome() : string{
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getDescricao() : string{
        return $this->descricao;
    }

    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }

    public function getPreco() : float{
        return $this->preco;
    }

    public function setPreco(string $preco){
        $this->preco = $preco;
    }
}
