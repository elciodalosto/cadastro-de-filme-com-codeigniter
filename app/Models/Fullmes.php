<?php namespace App\Models;

use CodeIgniter\Model;

class Fullmes extends Model
{

    protected $DBGroup = 'default';
    protected $db;
    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false; //caso seja verdadeiro, não deleta, apenas adiciona uma flag de inativo à linha    
    protected $skipValidation = true;
    protected $useTimestamps = true;
    protected $allowedFields = 
    [
        'name',
        'released',
        'rate',
        'director',
        'category',
        'gender',
        'cast',
        'length',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    // LISTAR DADOS DO BANCO
    public function listar(){
        $db = table('movies')->findAll();
    }    
    

    /* 
    - Retrieve a Job instance
    $job = $model->find(15);

    - Make some changes
    $job->name = "Foobar";

    - Save the changes
    $model->save($job);
    */


    /*
    $beforeInsert
    $afterInsert 
    $beforeUpdate 
    $afterUpdate 
    afterFind 
    afterDelete 

    find()
    exemplo:
    $user = $userModel->find($user_id);
    ou
    $users = $userModel->find([1,2,3]);
    

    findWhere()
    exemplo: 
    // Use simple where
    $users = $userModel->findWhere('role_id >', '10');

    // Use array of where values
    $users = $userModel->findWhere([
            'status'  => 'active',
            'deleted' => 0
    ]);
    
    findAll()
    exemplo:
    $users = $userModel->findAll();
    ou
    $users = $userModel->where('active', 1)->findAll();
    ou
    $users = $userModel->findAll($limit, $offset);


    first()
    exemplo:
    $user = $userModel->where('deleted', 0)
                  ->first();

    insert()
    exemplo: 
    $data = [
        'username' => 'darth',
        'email'    => 'd.vader@theempire.com'
    ];
    $userModel->insert($data);  


    update()
    exemplo:
    $data = [
        'username' => 'darth',
        'email'    => 'd.vader@theempire.com'
    ];

    $userModel->update($id, $data);
    

    save()
    exemplo:
    // Defined as a model property
    $primaryKey = 'id';

    // Does an insert()
    $data = [
            'username' => 'darth',
            'email'    => 'd.vader@theempire.com'
    ];

    $userModel->save($data);

    // Performs an update, since the primary key, 'id', is found.
    $data = [
            'id'       => 3,
            'username' => 'darth',
            'email'    => 'd.vader@theempire.com'
    ];
    $userModel->save($data);



    delete()
    exemplo:
    $userModel->delete(12);






    */

    
    // public function save($data)
    // {

    //     $data = [
    //         'name' => $data->name,
    //         'release' => $data->release,
    //         'rate',
    //         'director',
    //         'category',
    //         'gender',
    //         'cast',
    //         'length',
    //         'created_at',
    //         'updated_at',
    //         'deleted_at'
    //     ];
        
    // }
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
   
}