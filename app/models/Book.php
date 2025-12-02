<?php

namespace App\Models;

class Book extends \Core\Model
{
    // id, title, resume,created_at, author_id
    public   $title, $resume, $isbn, $cover, $author_id, $category_id;

    //liaisons 1-N

    protected $author;
    protected $category;

    // pour éviter la surcharge avec le set dans le construct


}

// echo $book->title;
//echo $book->author->firstname; (1-N)

//foreach  $author->books (1-N à l'envers)

// foreach $book->tags (N-M)
// foreach $tags->books (N-M)