<?php include __DIR__ . '/../head-html.php'; ?>

<a href="/edit-curso" class="btn btn-primary mb-2">
    Editar Curso
</a>
<ul class="list-group">
    <?php foreach ($cursos as $curso): ?>
        <li class="list-group-item">
            <?= $curso->getDescricao(); ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php include __DIR__ . '/../fim-html.php';?>