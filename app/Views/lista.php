<?php $this->extend('layouts/layout_main'); ?>

<?php $this->section('conteudo') ?>

<div class="container">
    <div class="row">
        <div class="col-12">
        
            <h3>LISTANDO:</h3>
            <div class="col s12">

                <p>Nome: <?php 

                        echo "aqui vai o nome ";
                    ?>
                </p>
               


            </div>
            <div class="text-left">
                <li><a href="<?php echo site_url('/') ?>" class="btn btn-danger">Voltar</a></li>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>