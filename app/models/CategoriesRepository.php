<?php

namespace App\Models;

use \PDO, \Core\DB;

abstract class CategoriesRepository
{
    public static function findAll(): array
    {
        $sql = "SELECT * FROM categories ORDER BY name ASC";
        $rs = DB::getConnection()->query($sql);
        return $rs->fetchAll(PDO::FETCH_CLASS, Category::class);
    }
    public static function findOneById(int $id): Category
    {
        $sql = "SELECT * FROM categories WHERE id = :id";
        $rs = DB::getConnection()->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(Category::class);
    }
}
