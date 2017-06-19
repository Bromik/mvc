<?php foreach ($blog as $item): ?>
    <a href="/blog/article/<?= $item['id'] ?>"><h3><?= $item['title'] ?></h3></a>
    <small><?= $item['date'] ?></small>
    <p><?= $item['short_content'] ?></p>
<?php endforeach; ?>
