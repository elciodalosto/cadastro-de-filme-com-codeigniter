<?php $this->extend('layouts/layout_main'); ?>

<?php $this->section('content') ?>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 border p-4">
                <h3>Autenticação: REGISTRO</h3><hr>
                <form action="user/register" method="post">

                    <!-- NOME -->
                    <!-- <div class="input-group input-group-sm mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text rotulo">Nome</span>
                        </div>
                        <input name="name" type="text" class="form-control">
                    </div> -->

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


                    <!-- BOTÃO DE REGISTRAR -->
                    <div class="text-right">
                        <button type="submit" name="register" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

<?php $this->endSection() ?>