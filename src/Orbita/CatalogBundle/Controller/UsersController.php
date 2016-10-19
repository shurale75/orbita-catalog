<?php
/**
 * Created by PhpStorm.
 * User: dmitri
 * Date: 8/30/2016
 * Time: 7:03 AM
 */

namespace Orbita\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    public function indexAction()
    {
        print 'USERS';
        return $this->render('OrbitaCatalogBundle:Page:users.html.twig');
    }
}
