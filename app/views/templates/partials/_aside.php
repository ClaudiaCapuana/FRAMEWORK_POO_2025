<?php
$categories = \App\Models\CategoriesRepository::findAll();
include "../app/views/categories/_index.php";
