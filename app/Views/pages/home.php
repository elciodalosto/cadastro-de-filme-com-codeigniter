<?= $this->extend('layouts/layout_main'); ?>

<?= $this->section('content') ?>

    <h2 class="text-center">SISTEMA PARA CADASTRO DE FILMES</h2>
        <!-- CARDS DOS FILMES -->

        <?php $movies ?>

        <?php // SE LOGIN OK ?>
                <div class="alert alert-success" role="alert">
                        CADASTRO EFETUADO COM SUCESSO!(fake)
                </div>
        <?php ?>


        <?php // SE LOGIN ERROR ?> 
                <div class="alert alert-danger" role="alert">
                        FALHA NO CADASTRO!(fake)
                </div>
        <?php ?>
       

<?= $this->endSection() ?>

