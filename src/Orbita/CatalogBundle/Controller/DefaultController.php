<?php

namespace Orbita\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrbitaCatalogBundle:Default:index.html.twig');
    }
}
