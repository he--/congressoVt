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
     *      path="/index",
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
     *      name="sobre-congresso"
     * )
     */
    public function sobreAction()
    {
        return $this->render('default/sobre.html');
    }
}
