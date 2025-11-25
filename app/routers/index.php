<?php
if (isset($_GET['books'])):

    include '../app/routers/books.php';
//ROUTE par défaut

//PATTERN : /

//CTRL: pageController

//ACTION: home
else:
    \App\Controllers\PagesController::homeAction();
endif;
