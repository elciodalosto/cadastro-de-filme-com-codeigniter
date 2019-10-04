<?php $this->extend('layouts/layout_main'); ?>

<?php $this->section('content') ?>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 border p-4">
                <h3>CADASTRO DE FILMES</h3><hr>
                <form action="movies/store" method="post">

                    <!-- NOME -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Nome</span>
                        </div>
                        <input name="name" type="text" class="form-control">
                    </div>

                    <!-- ANO -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Ano</span>
                        </div>
                        <input name="year" type="text" class="form-control">
                    </div>


                    <!-- GÊNERO -->
                    <!-- div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Gênero</span>
                        </div>
                        <input name="gender" type="text" class="form-control">
                    </div -->

                    <!-- DIRETOR -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo" id="inputGroup-sizing-sm">Diretor</span>
                        </div>
                        <input name="director" type="text" class="form-control">
                    </div>

                    <!-- GÊNERO -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text rotulo" for="inputGroupSelect01">Gênero</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="0">SELECIONAR...</option>
                            <option value="indefinida">Indefinido</option>
                            <option value="1">Comédia</option>
                            <option value="1">Ficção</option>
                            <option value="1">Suspense</option>
                            <option value="1">Ação</option>
                            <option value="1">Drama</option>

                        </select>                     
                    </div>
                    <!-- CATEGORIAS -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text rotulo" for="inputGroupSelect01">Categoria</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="0">SELECIONAR...</option>
                            <option value="indefinida">Indefinida</option>
                            <option value="1">Filme</option>
                            <option value="2">Seriado</option>
                            <option value="4">Documentário</option>
                            <option value="3">Desenho, Animação</option>
                            <option value="3">Musical, Show</option>
                        </select>                     
                    </div>

                    <!-- AVALIAÇÃO/RATE -->
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Avaliação</span>
                        </div>
                        <div class="text-center pl-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                            </div>
                        </div>
                    </div>
                    <!-- BOTÃO SALVAR -->
                    <div class="text-right">
                        <button type="submit" name="save" class="btn btn-success">Salvar Filme</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center">
            <li><a href="<?php echo site_url('/') ?>" class="btn btn-dark">Voltar</a></li>
        </div>
    </div>
    

<?php $this->endSection() ?>