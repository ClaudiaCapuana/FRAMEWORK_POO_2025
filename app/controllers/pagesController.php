<?php

namespace App\Controllers;

use \PDO;


abstract class PagesController
{
  public static  function homeAction()
  {

    $books = \App\Models\BooksRepository::findAll(3);
    $authors = \App\Models\AuthorsRepository::findAll(3);
    global $content, $title;

    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
  }
}
