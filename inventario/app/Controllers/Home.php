<?php

namespace App\Controllers;

use App\Models\ValidarUserModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function login(): string
    {
        return view('login_view');
    }


    public function validarUsuario()
    {
        // Determinar si es una solicitud GET o POST
        $lForm = $this->request->getPost('usuario');
        $cForm = $this->request->getPost('clave');
        
        
        
        // Instanciar el modelo de validación
        $userData = new ValidarUserModel();
        $user=$userData->validarusuario($lForm,$cForm);
        
        // Validar credenciales
        if($user) {
            // print_r($user['nombre']);
            // Credenciales correctas
            $data = [
                'titulo' => 'Acceso Exitoso',
                'mensaje' => 'Usted puede entrar al SISTEMA',
                'tipo' => 'success',
                'nombre'=>$user['nombre']
            ];
            
            // Aquí podrías iniciar una sesión o redirigir a un dashboard
            // session()->set('usuario_logueado', true);
            // return redirect()->to('/dashboard');
            
        } else {
            // Credenciales incorrectas
            $data = [
                'titulo' => 'Acceso Denegado',
                'mensaje' => 'Usuario o contraseña incorrectos',
                'tipo' => 'danger'
            ];
        }
        
        // Devolver una vista con el resultado
        return view('resultado_login', $data);
    }  
}
