<h2 class="text-3xl"><?php echo $book->title; ?></h2>

<div>
    <?php echo $book->resume ?>
</div>
<hr />
<ul class="border-y-4 border-gray-300 py-4">

    <li>Authors:<?php echo $book->author->firstname ?>
        <?php echo $book->author->lastname ?></li>
    <li>ISBN:<?php echo $book->isbn ?></li>
    <li>Category:<?php echo $book->category->name ?></li>
</ul>