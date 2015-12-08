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

    /**
     * @Route(
     *      path="/local",
     *      name="local_congresso"
     * )
     */
    public function localAction()
    {
        return $this->render('site/local.html.twig');
    }

    /**
     * @Route(
     *      path="/cursos",
     *      name="mini_cursos"
     * )
     */
    public function cursosAction()
    {
        return $this->render('site/mini_cursos.html.twig');
    }
}
