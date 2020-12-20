 <?php include __DIR__ . '/../head-html.php'; ?>

    <a href="/novo-curso" class="btn btn-primary mb-2">
        Novo Curso
    </a>
    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item">
                <?= $curso->getDescricao(); ?>
                <button class="btn-danger" style="float: right;">X</button>
                <button style="float: right; margin-right: 5px" class="btn-secondary">
                    <a href="<?php echo '/edit-curso/' . $curso->getID();?>" style="color: currentcolor;">Editar</a>
                </button>
            </li>
        <?php endforeach; ?>
    </ul>

<?php include __DIR__ . '/../fim-html.php';?>