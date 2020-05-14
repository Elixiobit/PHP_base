
<?php foreach ($images as $image): ?>
    <a href="photo.php?id=<?=$image['id']?>">
        <img width="150" src="img/<?=$image['name_image']?>" alt="">
    </a>
<?php endforeach; ?>
