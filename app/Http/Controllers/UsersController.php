<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Добавляем из папки Models класс Post, исп use
use App\Models\Users;

// Добавялем обработчик ошибкок
use App\Http\Requests\ContactRequest;
use App\Http\Requests\AuthRequest;

// Хешированный пароль
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller {
    public function submit(ContactRequest $req) {  

        // Добавление значений в БД
        $table = new Users();
        $table->login = $req->input('login');
        $table->name = $req->input('name');
        $table->email = $req->input('email');
        // $table->pass = Hash::make($req->input('pass'));
        $table->password = Hash::make($req->input('password'));

        session([
            'login' =>  $req->input('login'), 
            'name' =>  $req->input('name'),
            'email' =>  $req->input('email') ]);

        $table->save();

        return redirect('/lc')->with('success', 'Вход выполнен успешно!');
       
    }

    public function AuthAdmin(AuthRequest $au) {
        $table = new Users();
        $log = $au->only([ 'login', 'password' ]);


        if (Auth::attempt($log)) {
            session([
                'login' =>  $au->input('login'),
            ]);
            return redirect('/lc');
        }
            return redirect('/');
    }
    
    public function ExitSession() {
        session()->flush();

        return redirect('/');
    }


    public function JsonCodeUsers() {

        $json_code = Users::all();
        echo json_encode($json_code, JSON_UNESCAPED_UNICODE);
       

    } 

};