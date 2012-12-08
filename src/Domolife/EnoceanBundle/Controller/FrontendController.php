<?php

namespace Domolife\EnoceanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class FrontendController extends Controller
{
    public function indexAction()
    {
        $lamps = $this->getDoctrine()->getRepository('DomolifeEnoceanBundle:Device')->findBy(array('type' => 'lamp'));

        return $this->render('DomolifeEnoceanBundle:Frontend:index.html.twig', array('lamps' => $lamps));
    }
}
