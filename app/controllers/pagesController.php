<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $conn){
include_once "../app/models/booksModel.php";

$books= \App\Models\BooksModel\findAll($conn, 3);
GLOBAL $content, $title;

ob_start();
include '../app/views/pages/home.php';
$content = ob_get_clean();
}