<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Estudo CodeIgniter CIMOL</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css') ?>">

</head>
<body>

    <?= $this->include('templates/menu-navbar') ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-4">
                <?php $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <!-- <div class="text-center">
        <a href="<?php echo site_url('pages/about') ?>">2019 - Elcio Augusto Dalosto <em>&copy;</em></a>
    </div> -->
    
   
    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
</body>
</html>