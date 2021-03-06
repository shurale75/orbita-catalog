<?php

namespace Orbita\CatalogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrbitaCatalogBundle:Page:index.html.twig');
    }

    public function sidebarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('OrbitaCatalogBundle:Category')->getCategories();

        return $this->render('OrbitaCatalogBundle:Page:sidebar.html.twig', array('categories' => $categories));
    }

    public function bodyAction($id)
    {
        $em = $this->getDoctrine()->getManager();
//        $sites = $em->getRepository('OrbitaCatalogBundle:Site')->getHPSites();
//        return $this->render('OrbitaCatalogBundle:Page:body.html.twig', array('sites' => $sites));

        $vips = $em->getRepository('OrbitaCatalogBundle:Site')->getVipSites(5);
        $lasts = $em->getRepository('OrbitaCatalogBundle:Site')->getLatestSites(10);
        return $this->render('OrbitaCatalogBundle:Page:body.html.twig', array('vips' => $vips, 'lasts' => $lasts));

    }
}
