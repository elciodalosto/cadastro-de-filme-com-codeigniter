<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Fullmes;

class Movies extends Controller
{
    // RETRIEVE/READ - POST
    public function retrieve(){      
        $model = new Fullmes();
        $data['movies'] = $model->listar();
        return view('pages/home', $data);
    }

    // STORE - POST
    public function store(){ }

    // UPDATE - POST
    public function update(){ }
    
    // DELETE - POST
    public function delete(){ }

    // SEARCH - PESQUISAR
    public function search(){ }

}