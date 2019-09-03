<?php $this->extend('layouts/layout_main'); ?>

<?php $this->section('conteudo') ?>

    <div class="container text-center">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 border">
                <h3>CADASTRO DE FILMES</h3><hr>
                <form action="store" method="post">

                    <!-- NOME -->
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nome</span>
                        </div>
                        <input name="name" type="text" class="form-control">
                    </div>

                    <!-- ANO -->
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Ano</span>
                        </div>
                        <input name="year" type="text" class="form-control">
                    </div>


                    <!-- GÊNERO -->
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Gênero</span>
                        </div>
                        <input name="gender" type="text" class="form-control">
                    </div>

                    <!-- DIRETOR -->
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Diretor</span>
                        </div>
                        <input name="director" type="text" class="form-control">
                    </div>

                    <!-- CATEGORIAS -->
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
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
                            <span class="input-group-text">Avaliação</span>
                        </div>

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

                    <!-- BOTÃO SALVAR -->
                    <div class="text-right">
                        <button type="submit" class="btn btn-danger">Salvar Filme</button>
                    </div>

                </form>

                <div class="text-left">
                    <li><a href="<?php echo site_url('/') ?>" class="btn btn-dark">Voltar</a></li>
                </div>
                
            </div>
        </div>
    </div>

<?php $this->endSection() ?>