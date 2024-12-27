<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    //Вывод формы на сраницу
    public function index() {
        return view('index');
    }

    public function store (Request $request) {
        $userData = ['name' => $request->name, 'surname' => $request->surname, 'email' => $request->email];
        //Возвращение данных в JSON
        //return response()->json($userData);
        //Возвращение данных в шаблоне
        return view('hello', [ 'name' => $userData['name'],'surname' => $userData['surname'],'email' => $userData['email']]);
    }
}
