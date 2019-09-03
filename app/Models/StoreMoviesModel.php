<?php namespace App\Models;

use CodeIgniter\Model;

class StoreMoviesModel extends Model 
{
    //CATEGORIAS:
    //filme
    //seriado
    //novela
    //documentário
    //desenho e animação 3D
    //musical, videoclipe e show


    //GÊNEROS:
    //ação e aventura
    //comedia, humor e stand-up
    //suspense
    //terror
    //fantasia
    //espiritual, religioso e holístico
    //policial
    //romance
    //drama
    //esportivo, competitivo e colaborativo 
    //animal
    //cyberpunk
    //ficção
    //palestra
    //polêmico
    //nacional
    //história
    //lançamento
    //interativo
    //premiado
    //infantil
    //adolescente
    //adulto
    //medieval
    //conspiração
    //magia
    //tecnologia
    //financeiro
    //alimentação
    //receita
    //competição
    //saúde
    //curiosidade
   

    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;     
    protected $skipValidation = true;
    protected $allowedFields = [
        'name',
        'release',
        'rate',
        'director',
        'cagegory',
        'gender',
        'cast',
        'duration', 
    ];
    

}

?>