<?= $this->extend('layouts/layout_main'); ?>

<?= $this->section('content') ?>

    <div class="text-center">
        <?= $this->include('partials/about') ?>
    </div>
    
    <div class="text-center">
    <!-- BOTÃO VOLTAR -->
        <li><a href="<?php echo site_url('/') ?>" class="btn btn-dark">Voltar</a></li>
    </div>
        </div>
    </div>

<?= $this->endSection() ?>

