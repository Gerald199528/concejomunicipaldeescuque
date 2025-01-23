<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordRule implements Rule
{
    public function passes($attribute, $value)
    {
        $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[.$\/\-*#=])[A-Za-z\d.$\/\-*#=]{8,}$/';
        return preg_match($regex, $value);
    }

    public function message()
    {
        return 'Tu clave de acceso debe cumplir con estos requisitos: Tener 8 caracteres, ser alfanumérica con al menos 2 números y uno de estos caracteres: ".$/-*#="';
    }
}
