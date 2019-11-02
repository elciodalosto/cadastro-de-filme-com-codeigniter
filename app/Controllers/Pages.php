<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller{

/* www.localhost.com/pastaDoProjeto/public/index.php/NomeDoController/NomeDoMétodo/argumento1/argumento2/argumentoN... */

    // public function index(){
    //     echo view('pages/home'); // RETORNA A VIEW 'home'
    // }

    public function showme($page = 'home'){
        helper('form');
        if(!is_file(APPPATH.'/views/pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);   
        }
        $data['page'] = ucfirst($page); //ucfirst($input) deixar a primeira letra da palavra retornada como Maiúscula
        // echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        // echo view('templates/footer', $data);
    }

}