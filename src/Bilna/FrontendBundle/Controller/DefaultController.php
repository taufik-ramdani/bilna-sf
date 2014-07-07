<?php

namespace Bilna\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Request,
	Symfony\Component\HttpFoundation\Response;
	
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	 /**
      * @Route("/", name="homepage", options={"expose"=true})
      */
    public function indexAction() {
     $content = $this->renderView(
       'BilnaFrontendBundle:homepage:index.html.twig',
       array()
     );
     return new Response($content);
    }
	
}
