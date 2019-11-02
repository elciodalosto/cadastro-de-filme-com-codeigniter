<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MoviesModel;

class Movies extends Controller
{

    public function index(){

        $model = new MoviesModel();

        $data = [
            'movies' => $model->getMoviesById()
        ];

        echo view('pages/home', $data);
        echo view('templates/cards', $data);
    }

    //VISÃO DO ITEM
    public function show($id = null){
        $model = new MoviesModel();

        $data['movies'] = $model->getMoviesById($id);

        if(empty($data['movies'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("não foi possível encontrar o ID: ".$id);
        } else
        
        $data = [
            'title'     => $data['movies'][0]['title'],
            'genre'     => $data['movies'][0]['genre'],
            'released'  => $data['movies'][0]['released'],
            'director'  => $data['movies'][0]['director'],
            'rate'      => $data['movies'][0]['rate'],
        ];
        echo view('pages/show', $data);

    }
    //VISÃO GERAL DOS ITENS CADASTRADOS
    public function overview($id = null){
        $model = new MoviesModel();

        $data['movies'] = $model->getMoviesById($id);

        if(empty($data['movies'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("não foi possível encontrar o ID: ".$id);
        } else


        echo view('pages/overview', $data);

    }
 

    //STORE
    public function store() {
        helper('form');
        $model = new MoviesModel();

        $rules = [
            'title'     => 'required',
            'released'  => 'required',
            'director'  => 'required',
            'genre'     => 'required',
            'rate'      => 'required'
        ];

        if($this->validate($rules)) {
            $model->save([
                'id'         => $this->request->getVar('id'),
                'title'      => $this->request->getVar('title'),
                'released'   => $this->request->getVar('released'),
                'director'   => $this->request->getVar('director'),
                'genre'      => $this->request->getVar('genre'),
                'rate'       => $this->request->getVar('rate')
            ]);

            echo view('pages/store-success');
        } else {
            echo view('pages/not-success');
        }
    }

    //EDIT
    public function edit($id = null) {
        helper('form');
        $model = new MoviesModel();

        $data['movies'] = $model->getMoviesById($id);
        if(empty($data['movies'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Não foi possível encontrar o filme solicitado");
        } else

        $data = [
            'id'        => $data['movies'][0]['id'],
            'title'     => $data['movies'][0]['title'],
            'released'  => $data['movies'][0]['released'],
            'director'  => $data['movies'][0]['director'],
            'genre'     => $data['movies'][0]['genre'],
            'rate'      => $data['movies'][0]['rate']
        ];

        echo view('pages/form_create', $data);

    }

    // UPDATE - POST
    public function update() {

     }
    
    // DELETE - POST
    public function delete($id) { 
        $model = new MoviesModel();

        if(empty($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("É necessário passar o ID do filme a ser excluído");
        } else
        
        $model->delete($id);
        echo view('pages/delete-success');
    }

    // SEARCH - PESQUISAR
    public function search() { }

}