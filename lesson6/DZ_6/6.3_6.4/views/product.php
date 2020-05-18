<?php
?>

<div class="main">
    <div class="image-main">
        <img src="/img/<?= $image['path']?>" alt="">
    </div>
    <div class="text-main">
        <h3><?= $image['name_product']?></h3>
        <p class="cost">$ <span><?= $image['cost']?></span>/sq</p>
        <div class="button"><a href="#" class="button-text">Order Us<img src="/img/arrow1.svg" alt="logo"
                                                                         class="arrow"></a></div>
        <p class="text">T<?= $image['description']?></p>
    </div>
</div>
<div class="clr"></div>
<div class="commits">
    <p><?= $image['reviews']?></p>
</div>
<div class="touch">
    <form action="" enctype="multipart/form-data" method="post">
        <label> Имя
            <input type="text" size="30" placeholder="Ваше имя" name="name"> </label>
        <br>
        <label> Оставте комментарий <br>
                <textarea name="commit" id="" cols="100" rows="10"></textarea>
            </label>
        <p><input type="submit"></p>
    </form>
</div>


