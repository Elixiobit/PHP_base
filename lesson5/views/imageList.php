<?php

?>

<?php foreach ($images as $image): ?>
        <a href="/photo.php?id=<?= $res ?>" ><img width="150" src="/img/<?= $image ?>" alt=""></a>
<?php endforeach; ?>
