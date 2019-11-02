<?php $this->extend('layouts/layout_main'); ?>

<?php $this->section('content') ?>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 border p-4">
                <h3>Autenticação: LOGIN</h3><hr>
                <form action="user/login" method="post">

                    <!-- EMAIL -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">E-mail</span>
                        </div>
                        <input name="email" type="text" class="form-control">
                    </div>

                    <!-- SENHA -->
                    <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Senha</span>
                        </div>
                        <input name="pass" type="text" class="form-control">
                    </div>


                    <!-- BOTÃO DE LOGAR -->
                    <div class="text-right">
                        <button type="submit" name="login" class="btn btn-success">Acessar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

<?php $this->endSection() ?>