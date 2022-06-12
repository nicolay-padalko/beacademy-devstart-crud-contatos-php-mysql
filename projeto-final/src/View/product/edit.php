<h1>Editar produtos</h1>


<form action="" method="post">
    <?php
        extract($data);
        var_dump($product);
        var_dump(listCategories());
    ?>

    <label for="category">Categoria</label>

<!--    <select name="category" id="category" class="form-select mb-3">-->
<!--        <option selected>-- Selecione -- </option>-->
<!---->
<!--        --><?php
//        while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {
//            extract($category);
//
//            echo "<option value='{$id}'>{$name}</option>";
//        }
//        ?>
<!--    </select>-->


    <label for="name">Nome</label>
    <input value="<?php echo $product['name']?>" id="name" name="name" type="text" class="form-control mb-3">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" class="form-control mb-3"><?php echo $product['description'] ?></textarea>

    <label for="photo">Photo</label>
    <input value="<?php echo $product['photo']?>" id="photo" name="photo" type="text" class="form-control mb-3">

    <label for="value">Preço</label>
    <input value="<?php echo $product['value']?>" id="value" name="value" type="text" class="form-control mb-3">

    <label for="quantity">Quantidade</label>
    <input value="<?php echo $product['quantity']?>" id="quantity" name="quantity" type="text" class="form-control mb-3">






    <button class="btn btn-primary mb-3">Atualizar</button>
</form>
