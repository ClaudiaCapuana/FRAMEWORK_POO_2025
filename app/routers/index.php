<?php

//ROUTE par défaut

//PATTERN : /

//CTRL: pageController

//ACTION: home

include_once "../app/controllers/pagesController.php";
\App\Controllers\PagesController\homeAction($conn);