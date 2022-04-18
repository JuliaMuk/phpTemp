<div class='card'>
    <img class='card__img' src="<?= $item['path'] ?>" alt="">  
    <a href="<?= $_SERVER['REQUEST_URI'] ?>view.php?id=<?= $item['id'] ?>">
        <?= $item['name'] ?>
    </a>  
    <p>Цена: <?= $item['price'] ?></p>
    <form id="form-buy" class="form-buy" action="" method="POST">
        <label for="count">Количество</label>
        <input class="form-num" type="number" name="count" id="count" value="1">
        <input type="submit" value="Купить">
    </form>

</div>