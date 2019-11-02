<?php $this->extend('layouts/layout_main'); ?>

<?php $this->section('content') ?>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 border p-4">
                <h3>CADASTRO DE FILMES</h3><hr>
          
                <form method="post" action="<?php echo site_url('movies/store') ?>">
       
                    <!-- TITULO/TITLE/NOME -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Nome</span>
                        </div>
                        <input name="title" type="text" class="form-control" value="<?php echo isset($title) ? $title : set_value('title') ?>">
                    </div>

                    <!-- ANO/RELEASE -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Ano</span>
                        </div>
                        <input name="released" type="text" class="form-control" value="<?php echo isset($released) ? $released : set_value('released') ?>">
                    </div>

                    <!-- DIRETOR/DIRECTOR -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo" id="inputGroup-sizing-sm">Direção</span>
                        </div>
                        <input name="director" type="text" class="form-control" value="<?php echo isset($director) ? $director : set_value('director') ?>">
                    </div>

                    <!-- GÊNERO/GENDER -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Gênero</span>
                        </div>
                        <input name="genre" type="text" class="form-control" value="<?php echo isset($genre) ? $genre : set_value('genre') ?>">
                    </div>

                    
                    <!-- AVALIAÇÃO/RATE -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Avaliação</span>
                        </div>
                        <input name="rate" type="text" class="form-control" value="<?php echo isset($rate) ? $rate : set_value('rate') ?>">
                    </div>

                    <!-- BOTÃO SALVAR -->
                    <div class="text-right">
                        <button type="submit" name="store" class="btn btn-sm btn-success">Salvar Filme</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    

<?php $this->endSection() ?>