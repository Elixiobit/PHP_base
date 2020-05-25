<div class="main">
    <div class="image-main">
        <img src="/img/<?= $image['path'] ?>" alt="">
    </div>
    <div class="text-main">
        <h3><?= $image['name_product'] ?></h3>
        <p class="cost">$ <span><?= $image['cost'] ?></span>/sq</p>
        <form action="" method="post">
            <input class="button button-text" type="submit" value="Order Us" name="order">

        </form>

        <p class="text"><?= $image['description'] ?></p>
    </div>
</div>
<div class="clr"></div>
<div class="commits">
    <?php foreach ($reviews as $review): ?>
        <h3><?= $review['name_user'] ?>:</h3>
        <p><?= $review['review'] ?></p>
        <br>
    <?php endforeach; ?>
</div>
<div class="touch">
    <form action="" enctype="multipart/form-data" method="post">
        <label> Имя
            <input type="text" size="30" placeholder="Ваше имя" name="name">
        </label>
        <br>
        <label> Оставте комментарий <br>
            <textarea name="commit" id="" cols="100" rows="10"></textarea>
        </label>
        <p><input type="submit"></p>
    </form>
</div>


