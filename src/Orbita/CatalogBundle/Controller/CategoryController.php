<?php

namespace Orbita\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $sites = $em->getRepository('OrbitaCatalogBundle:Site')->getSitesByCategory($id);
        $ctitle = $em->getRepository('OrbitaCatalogBundle:Category')->getCategory($id);
        return $this->render('OrbitaCatalogBundle:Category:show.html.twig', array('sites' => $sites, 'ctitle' => $ctitle));
    }
}