<?php

namespace App\Controllers;

use \PDO;


abstract class BooksController
{
    public static  function showAction(int $id): void
    {

        $book = \App\Models\BooksRepository::findOneById($id);
        global $content, $title;
        $title = $book->title;
        ob_start();
        include '../app/views/books/show.php';
        $content = ob_get_clean();
    }
}
