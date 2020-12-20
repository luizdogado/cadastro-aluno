<?php include __DIR__ . '/../head-html.php'; ?>

    <form action="/salvar-curso" method="POST">
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button> 
    </form>
<?php include __DIR__ . '/../fim-html.php'; ?>