<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller{

/* WWW.URL.COM/index.php/NomeDoController/NomeDoMétodo/argumento1/argumento2/argumentoN... */

    public function index(){
        return view('pages/home'); // RETORNA A VIEW 'home'
    }
    public function about(){
        return view('pages/about'); // RETORNA A VIEW 'about'
    }
    public function login(){
        return view('pages/form_login'); // RETORNA A VIEW 'login'
    }
    public function register(){
        return view('pages/form_register'); // RETORNA A VIEW 'register'
    }
    public function create(){
        return view('pages/form_create'); // RETORNA A VIEW 'register'
    }

}