<?php

namespace Core;


use \PDO, \Core\DB;


abstract class Repository
{
    // Comment récupérer le nom de table et de classe 
    // automatiquement à partir de la classe enfant static :: ?


    protected static $_table_name, $_class;


    private static function init()
    {
        // App\Models\BooksRepository
        // echo static::class;
        $root_name = basename(str_replace('\\', '/', static::class), "Repository");  // Books
        static::$_table_name = strtolower($root_name);                 // books
        // atention à Category pas pris en compte ici !!!!!
        static::$_class = '\App\Models\\' . basename($root_name, 's'); // \App\Models\Book
    }


    public static function findAll(int $limit = 9): array
    {
        static::init();
        $sql = "SELECT *
                FROM " .  static::$_table_name . "
                ORDER BY created_at DESC
                LIMIT :limit;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_CLASS, static::$_class);
    }


    public static function findOneById(int $id): Object
    {
        static::init();
        $sql = "SELECT *
            FROM " . static::$_table_name . "
            WHERE id = :id;";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(static::$_class);
    }
}
