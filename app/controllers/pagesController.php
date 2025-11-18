<?php

namespace App\Controllers;
use \PDO;

abstract class PagesController{
  public static  function homeAction(PDO $conn){
    include '../app/models/booksModel.php';
  $books= \App\Models\BooksModel\findAll($conn, 3);
  GLOBAL $content, $title;

  ob_start();
  include '../app/views/pages/home.php';
  $content = ob_get_clean();
  }
}

