<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ['email','mensagem'];
    
    private string $email;

    private string $mensagem;

    public function getEmail() : string{
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getMensagem() : string{
        return $this->mensagem;
    }

    public function setMensagem(string $mensagem){
        $this->mensagem = $mensagem;
    }
}
