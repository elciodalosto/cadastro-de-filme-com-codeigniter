<?= $this->extend('layouts/layout_main'); ?>

<?= $this->section('content') ?>

        <?php // SE LOGIN ERROR ?> 
                <div class="alert alert-danger" role="alert">
                        FALHA NO REGISTRO!
                </div>
        <?php ?>
        
<?= $this->endSection() ?>

