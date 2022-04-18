<aside class="filter">
    <ul class="filter__list">
        <?php
            foreach($categories as $c){
                echo "<li>$c</li>";
            }
        ?>
    </ul>
</aside>
<div class="catalog">
    <?php
        foreach($items as $item){
            echo renderTemplate('templates/card.php',['item' => $item]);
        }
    ?>
</div>