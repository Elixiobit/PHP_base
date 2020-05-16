<?php
/** @var array $files */
?>

<?php foreach ($files as $image): ?>
    <a href="/photo.php?id=<?=$image['id']?>&size=<?=$image['size']?>" target="_blank">
        <img width="200" src="/img/small/<?=$image['name_image']?>" alt="">
    </a>
<?php endforeach;?>
