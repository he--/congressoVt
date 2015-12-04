<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route(path="/")
 */
class SiteController extends Controller
{
    /**
     * @Route(
     *      path="/",
     *      name="inicio"
     * )
     */
    public function indexAction()
    {
        return $this->render('site/index.html.twig');
    }

    /**
     * @Route(
     *      path="/sobre",
     *      name="sobre_congresso"
     * )
     */
    public function sobreAction()
    {
        return $this->render('site/sobre.html.twig');
    }
}
