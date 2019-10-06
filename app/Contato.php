<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista() {
        return (object) [
            'nome'=>'leonardo',
            'tel'=>'1123123123',
            'email'=>'leodesa.10@gmail.com'
        ];
    }
}
