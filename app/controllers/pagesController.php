<?php

namespace App\Controllers;

use \PDO;


abstract class PagesController
{
  public static  function homeAction(PDO $conn)
  {

    $books = \App\Models\BooksRepository::findAll($conn, 3);
    global $content, $title;

    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
  }
}
