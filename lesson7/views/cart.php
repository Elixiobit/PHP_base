<div class="product">

    <?php foreach ($products as $product): ?>
        <?php
        $product = getProduct($product);
        ?>
        <div>
            <a href="/product.php?id=<?= $product[0]['id'] ?>">
                <img src="/img/<?= $product[0]['path'] ?>" alt="" class="productImg">
            </a>
            <form action="" method="post">
                <input type="text" value="<?= $product[0]['id'] ?>" name="product_id" hidden>
                <input type="submit" class="auth_button" value="Удалить">
            </form>
        </div>
    <?php endforeach; ?>
</div>
<div class="clr"></div>
