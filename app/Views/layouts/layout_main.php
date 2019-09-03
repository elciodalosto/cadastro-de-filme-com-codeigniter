<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Estudo CodeIgniter CIMOL</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css') ?>">

</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-light bg-dark py-2">
                <h3>CIMOL INTERNSHIP MOVIES</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 py-4">
            <?php $this->renderSection('conteudo') ?>
        </div>
    </div>

    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
</body>
</html>