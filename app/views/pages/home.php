<h2>Recent Books</h2>

<ul>
    <?php foreach ($books as $book): ?>
        <li><?php echo $book->title; ?> -
            <!-- on va tronquer le resume -->
            <?php echo \Core\Helpers::truncate($book->resume, 30); ?>
        </li>
    <?php endforeach; ?>
</ul>

<h2>Recent Authors</h2>

<ul>
    <?php foreach ($authors as $author): ?>
        <li><?php echo $author->lastname ?> - <?php echo $author->firstname ?></li>



    <?php endforeach; ?>
</ul>