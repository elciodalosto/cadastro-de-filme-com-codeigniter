<?php namespace App\Models;

use CodeIgniter\Model;

class MoviesModel extends Model
{
    protected $DBGroup = 'default';
    protected $db = 'cadastro_de_filmes';
    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false; //caso seja verdadeiro, não deleta, apenas adiciona uma flag de inativo à linha    
    protected $skipValidation = false;
    protected $useTimestamps = false;
    protected $allowedFields = 
    [
        'id',
        'title',
        'released',
        'director',
        'genre',
        'rate'
    ];
    
    // RETORNA MODELO COM O ID DO FILME
    public function getMoviesById($id = null) {
        if($id === null){
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->find();
    }



    
}