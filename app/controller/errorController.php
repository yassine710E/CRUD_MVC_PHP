<?php

//require the senpai controller class

require __DIR__.'/../../core/Controller.php';

// define class errorController

class errorController extends Controller
{
    function notFound(){

        parent::loadView(__FUNCTION__);

    }
}