<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    //Atributos de Configuração
    protected $table = 'usuarios';
    protected $allowedFields = ['usuario', 'senha'];



    //Método GET
    public function getUsuarios($user, $senha)
    {
        return $this->asArray()
            ->where(['usuario' => $user, 'senha' => md5($senha)])
            ->first();
    }
}
