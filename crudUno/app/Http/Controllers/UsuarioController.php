<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\publicacion;

class UsuarioController extends Controller
{
   public function index(){
        return view ("usuario_create");
   }
   
   public function store(Request $request){ 
    print_r("ana)");
    
    $datos = request();
    //Validación
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string',  'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
   
    //Crear el usuario
    //$user = User::create($datos);
    $user = new User(); // Asegúrate de usar el modelo correcto
    $user->name = $datos['name'];
    $user->email = $datos['email'];
    $user->password = bcrypt($datos['password']); // Asegúrate de encriptar la contraseña
    $user->save();
    return redirect()->route('usuarios.index')->with('mensaje', 'Usuario creado correctamente');
   }
  

}