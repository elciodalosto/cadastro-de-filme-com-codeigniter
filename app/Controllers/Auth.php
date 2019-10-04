<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller{

/* WWW.URL.COM/index.php/NomeDoController/NomeDoMétodo/argumento1/argumento2/argumentoN... */


    public function login()
    {
        
        // $request = \Config\Services::request();

        // $request->getPost('login');

        // echo $request;
        return view('pages/home');
    }
    public function register()
    {
        
        $request = \Config\Services::request();

        $request->getPost('register');

        $data['nome'] = $request;

        return view ('pages/home', $data);

    }

}