<?php namespace App\Controllers;

use App\Models\StoreMoviesModel;
use CodeIgniter\Controller;

class CrudController extends BaseController
{
	// SELECIONA A VIEW DA PÁGINA BASE DOS FILMES
	public function index()
	{
		return view('index');
	}
	// ROTEIA PARA O FORMULÁRIO DE CADASTRO
	public function create()
	{
		return view('cadastro');
	}
	// GRAVA O FILME NO BANCO
	public function store(string $data)
	{
		return view('index');
	}
	// LÊ OU LISTA OU RETORNA OS FILMES POR Elenco
	public function listByCast()
	{
		$db = \Config\Database::connect();
		echo "contectado ao banco com sucesso!";
		$query = $db->query('SELECT * FROM cadastro_de_filmes.filme');
		$results = $query->getResult();

		foreach ($results as $row){		
			echo $row->id_categorias;
			echo $row->nome;
		}

		// echo 'Resultados: '.count($results);
		return view('lista', $results);

	}
	// LÊ OU LISTA OU RETORNA OS FILMES POR NOME
	public function listByName()
	{
		$storeMoviesModel = new StoreMoviesModel();	
		$movie = $storeMoviesModel->findAll();

		return view('lista', $movie);

	}
	// LÊ OU LISTA OU RETORNA OS FILMES POR CATEGORIA
	public function listByCategory(string $data)
	{
		return view('index');
	}
	// LÊ OU LISTA OU RETORNA OS FILMES POR ANO
	public function listByYear(int $data)
	{
		return view('index');
	}
	// LÊ OU LISTA OU RETORNA OS FILMES POR AVALIAÇÃO
	public function listByRate(int $data)
	{
		return view('index');
	}
	// LÊ OU LISTA OU RETORNA OS FILMES POR GÊNERO
	public function listByGender(string $data)
	{
		return view('index');
	}
	// LÊ OU LISTA OU RETORNA OS FILMES POR DIRETOR
	public function listByDirector(string $data)
	{
		return view('index');
	}

	// EDITA/ATUALIZA OS FILME NO BANCO
	// public function update()
	// {
		
	// }
	// DELETA/APAGA OS FILME NO BANCO
	// public function delete()
	// {
		
	// }
}
