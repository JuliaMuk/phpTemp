<div class="product">
    <img class='product__img' src="<?= $item['path'] ?>" alt="">  
    <h1>
        <?= $item['name'] ?>
    </h1>  
    <p>Цена: <?= $item['price'] ?></p>
    <form id="form-buy" action="" method="POST">
        <label for="count">Количество</label>
        <input class="form-num" type="number" name="count" id="count">
        <input type="submit" value="Купить">
    </form>
</div>