<?php

?>

<div class="product">
    <?php foreach ($productImg as $image): ?>
        <a href="/product_item.php?id=<?= $image['id'] ?>" target="_blank">
            <img src="/img/<?= $image['path'] ?>" alt="" class="productImg"></a>
    <?php endforeach; ?>
</div>
<div class="clr"></div>
