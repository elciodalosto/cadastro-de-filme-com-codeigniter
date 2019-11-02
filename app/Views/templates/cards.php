
<div class="col-12 border">
        <div class="card-deck p-3">
                <?php foreach ($movies as $movie) : ?>
                <div class="card">
                        <?php helper('html'); echo img('assets/img/bg.png'); ?>
                        <div class="card-body">
                                <h5 class="card-title"><?php echo $movie['title']; ?></h5>
                                <p class="card-text"><small class="text-muted">Direção: <?php echo $movie['director']; ?></small></p>
                                <p class="card-text"><small class="text-muted">Ano: <?php echo $movie['released']; ?></small></p>
                        </div>
                </div>
                <?php endforeach; ?>
        </div>
</div>
        