<?php

namespace App\Models;

class Book
{
    // id, title, resume,created_at, author_id
    public $id,  $title, $resume, $isbn, $cover, $author_id, $category_id, $created_at;

    //liaisons

    private $author;
    private $category;

    // pour éviter la surcharge avec le set dans le construct
    public function __get(string $prop): mixed
    // $prop = "category"

    //1 si le stter setProp existe
    // 2 je le lance et retourne l'objet

    {

        $propName = "set" . ucfirst($prop);
        if (method_exists($this, $propName)):
            $this->$propName();
            return $this->$prop;
        endif;
        // si il y a rien tu continue
        return true;
    }

    public function setAuthor()
    {
        if ($this->author === null):
            $this->author = AuthorsRepository::findOneById($this->author_id);
        endif;
    }
    public function setCategory()
    {
        if ($this->category === null):
            $this->category = CategoriesRepository::findOneById($this->category_id);
        endif;
    }
}
