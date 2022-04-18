<div class='card'>
    <!-- <img class='card__img' src="<?= $item['path'] ?>" alt="">   -->
    <a href="<?= $_SERVER['REQUEST_URI'] ?>view.php?id=<?= $item['id_product'] ?>">
        <?= $item['p_name'] ?>
    </a>  
    <p>Цена: <?= $item['p_price'] ?></p>
    <form id="form-buy" class="form-buy" action="addBasket.php" method="POST">
        <label for="count">Количество</label>
        <input class="form-num" type="number" name="count" id="count" value="1">
        <input type="hidden" name="id" id="id" value ="<?= $item['id_product'] ?>">
        <input type="submit" value="Купить">
    </form>
<?php 
echo $_SERVER['HTTP_HOST'];
?>
</div>