<?php
namespace App\Models;

use CodeIgniter\Model;

class ValidarUserModel extends Model
{
    // public $loginDB="mp";
    // public $claveDB="12345";


    private $usuarios = [
        [
            'usuario' => 'mp',
            'clave' => '12345',
            'nombre' => 'Administrador',
            'email' => 'admin@sistema.com',
            'rol' => 'admin',
            'activo' => true
        ],
        [
            'usuario' => 'sup',
            'clave' => '123',
            'nombre' => 'Supervisor General',
            'email' => 'supervisor@sistema.com',
            'rol' => 'supervisor',
            'activo' => true
        ]
    ];



    public function validarusuario($lform, $cform)
    {
        foreach ($this->usuarios as $user) {
            if ($user['usuario'] === $lform && $user['clave'] === $cform ) {
                // No retornar la contraseña por seguridad
                // unset($user['clave']);
                return $user;
            }
        }
        return false;
    }
}