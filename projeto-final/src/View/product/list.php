<h1>Lista produtos</h1>

<div class="mb-3 text-end">
    <a href="/produtos/novo" class="btn btn-outline-primary">Novo Produto</a>
</div>


<table class="table table-hover table-striped">
    <thead class="table-dark">
    <tr>
        <th>#ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Foto</th>
        <th>Valor</th>
        <th>categoria</th>
        <th>Quantidade</th>
        <th>Criado</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($product = $data->fetch(\PDO::FETCH_ASSOC)) {

        extract($product);

        echo '<tr>';
        echo "<td>{$id}</td>";
        echo "<td>{$name}</td>";
        echo "<td>{$description}</td>";
        echo "<td><img src='{$photo}' width='120' ></td>";
        echo "<td>{$value}</td>";
        echo "<td>{$category_id}</td>";
        echo "<td>{$quantity}</td>";
        echo "<td>{$created_at}</td>";
        echo "<td>
                <a href='/categoria/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                <a href='/categoria/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
            </td>";
        echo ' </tr > ';
    }
    ?>
    </tbody>
</table>
