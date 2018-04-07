<?php
/**
 * Created by PhpStorm.
 * User: SLI3763
 * Date: 07/04/2018
 * Time: 15:49
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homePage()
    {
        return $this->render('base.html.twig');
    }
}