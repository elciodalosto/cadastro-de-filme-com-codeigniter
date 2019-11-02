<?= $this->extend('layouts/layout_main'); ?>

<?= $this->section('content') ?>

  <ul>
    <p><?php echo "Título: "    .$title ?></p>
    <p><?php echo "Gênero: "    .$genre ?></p>
    <p><?php echo "Ano: "       .$released ?></p>
    <p><?php echo "Avaliação: " .$rate ?></p>
    <p><?php echo "Direção: "   .$director ?></p>
  </ul>

<?= $this->endSection() ?>
