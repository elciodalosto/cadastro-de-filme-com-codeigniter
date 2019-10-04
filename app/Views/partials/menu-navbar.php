<nav class="navbar navbar-expand-sm bg-light">
  <a class="navbar-brand text-center text-danger p-2" href="<?php echo site_url('/') ?>"><b>CINE<br/>CIMOL</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-light btn btn-primary" href="<?php echo site_url('/') ?>">Pagina Inicial<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light btn btn-danger" href="<?php echo site_url('form_create') ?>">Cadastrar Filme<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light btn btn-dark" href="<?php echo site_url('about') ?>">Sobre<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0 col-6" action="search" method="get">
      <input class="form-control mr-sm-2 col-6" type="search" name="args" placeholder="Pesquisar por filme, diretor, ator, ano, elenco" aria-label="Search">
      <button name="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>

    <li class="nav-item">
      <a class="btn btn-success text-light" href="<?php echo site_url('form_login') ?>">Acesso<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="btn btn-primary text-light" href="<?php echo site_url('form_register') ?>">Registro<span class="sr-only">(current)</span></a>
    </li>
  </div>
</nav>