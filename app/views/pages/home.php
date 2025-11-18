<h2>Recent Books</h2>

<ul>
<?php foreach($books as $book): ?>
    <li><?php echo $book['title']; ?>
<?php echo $book['resume']; ?></li>
<?php endforeach; ?>
</ul>