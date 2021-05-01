<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticarController extends Controller
{
    public function registro(RegistroRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return response()->json([
            'res' => true,
            'msg'=>'Usuario registrado'
        ],200);
        dd('$request');

    }
}
