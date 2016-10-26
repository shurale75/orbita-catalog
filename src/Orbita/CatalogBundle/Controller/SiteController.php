<?php

namespace Orbita\CatalogBundle\Controller;
use Orbita\CatalogBundle\Entity\Site;
use Orbita\CatalogBundle\Form\SiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SiteController extends Controller
{


    public function createAction(Request $request, $cat_id)
    {
        $site  = new Site();
        $form    = $this->createForm(SiteType::class, $site);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($site);
            $em->flush();

            return $this->redirectToRoute('orbita_catalog_homepage');
        }

        return $this->render('OrbitaCatalogBundle:Site:create.html.twig', array(
                    'site' => $site,
                    'form' => $form->createView()
        ));    }
}
