<?php $this->extend('layouts/layout_main'); ?>

<?php $this->section('conteudo') ?>

    <div class="container">
        <div class="row">
            <div class="col-2 border">
                <h3>GÊNEROS</h3>
                <p>Listar por:</p>
                <li><a href="<?php echo site_url('cadastro') ?>" class="btn btn-sm btn-info">Cadastrar Filme</a></li>
                <li><a href="<?php echo site_url('list-by-name') ?>" class="">Nome</a></li>
                <li><a href="<?php echo site_url('list-by-category') ?>" class="">Categoria</a></li>
                <li><a href="<?php echo site_url('list-by-year') ?>" class="">Ano</a></li>
                <li><a href="<?php echo site_url('list-by-rate') ?>" class="">Avaliação</a></li>
                <li><a href="<?php echo site_url('list-by-gender') ?>" class="">Gênero</a></li>
                <li><a href="<?php echo site_url('list-by-director') ?>" class="">Diretor</a></li>


            </div>

            <!-- CARDS DOS FILMES -->
            <div class="col-10 border">
                <div class="card-deck">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">FILME 1</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">FILME 2</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">FILME 3</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php $this->endSection() ?>