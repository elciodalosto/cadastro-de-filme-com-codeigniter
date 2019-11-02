<?= $this->extend('layouts/layout_main') ?>

<?= $this->section('content') ?>
<script>

        function confirma(){
        if(!confirm("Deseja realmente apagar este item? Não será possível recuperá-lo.")){
                return false;
        } else
                return true;

        }   

</script>

<div class="table table-sm">
        <h2 class="text-center">Filmes cadastrados</h2>
        <table>
                <tr>
                        <th class="text-center border-left">Título</th>
                        <th class="text-center border-left">Ano</th>
                        <th class="text-center border-left">Diretor</th>
                        <th class="text-center border-left">Gênero</th>
                        <th class="text-center border-left">Avaliação</th>
                        <th class="text-center text-danger border">AÇÕES</th>
                </tr>
                <?php foreach ($movies as $movie) : ?>
                        <tr class="border">
                                <td class="text-center border"><a href="<?php echo site_url('/movies/show/'.$movie['id']) ?>"><?php echo $movie['title']; ?></a></td>
                                <td class="text-center border"><a href="<?php echo site_url('/movies/show/'.$movie['id']) ?>"><?php echo $movie['released']; ?></a></td>
                                <td class="text-center border"><a href="<?php echo site_url('/movies/show/'.$movie['id']) ?>"><?php echo $movie['director']; ?></a></td>
                                <td class="text-center border"><a href="<?php echo site_url('/movies/show/'.$movie['id']) ?>"><?php echo $movie['genre']; ?></a></td>
                                <td class="text-center border"><i class="fa fa-star text-warning" aria-hidden="true"></i><?php echo $movie['rate']; ?></a></td>
                        
                                <td>
                                        <a class="btn btn-sm btn-danger" onclick="return confirma()" href="<?php echo site_url('/movies/delete/'.$movie['id']) ?>">Excluir</a>
                                        <a class="btn btn-sm btn-dark" href="<?php echo site_url('/movies/edit/'.$movie['id']) ?>">Editar</a>
                                </td>
 
                        </tr>
                <?php endforeach; ?>
        </table>
</div>
<?= $this->endSection() ?>
