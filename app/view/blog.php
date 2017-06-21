
<?php foreach ($data as $item): ?>
    <a href="/blog/article/<?= $item['id'] ?>"><h1><?= $item['title'] ?></h1></a>
    <small><?= $item['date'] ?></small>
    <p><?= $item['short_content'] ?></p>
<?php endforeach; ?>

