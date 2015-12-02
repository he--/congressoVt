<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    public function indexAction(Request $request)
    {
        return $this->render('index.html');
    }

    /**
     * @Route(
     *      path="/sobre",
     *      name="sobre-congresso"
     * )
     */
    public function sobreAction(Request $request)
    {
        return $this->render('default/sobre.html');
    }
}
