<?php
/**
 * Created by PhpStorm.
 * User: fredux
 * Date: 03/07/16
 * Time: 12:07
 */

namespace App\Controllers;

use App\Conn;
use App\Models\Trafar;
use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{


    public function index()
    {
        $trafar = Container::getModel('trafar');
        $this->view->trafar = $trafar->fetchAll();
        $this->render('index');

    }
    public function contact()
    {
        $this->view->cars = array("ferrary", "mustang");
        $this->render("contact", false);

    }


}