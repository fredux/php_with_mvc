<?php

namespace App;

use SON\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {

        $routes['home'] = array('route'=>'/mymvc/','controller'=>'IndexController','action'=>'index');
        $routes['contact'] = array('route'=>'/mymvc/contact','controller'=>'IndexController','action'=>'contact');
        $this->setRoutes($routes);
        $this->run($this->getUrl());

    }



}