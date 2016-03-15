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
     *      path="/",
     *      name="inicio"
     * )
     */
    public function indexAction(Request $request)
    {

        $this->addFlash(
            'notice',
            'Your changes were saved!'
        );

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

    /**
     * @Route(
     *      path="/cronograma",
     *      name="cronograma"
     * )
     */
    public function cronogramaAction()
    {
        return $this->render('site/cronograma.html.twig');
    }

    /**
     * @Route(
     *      path="/inscricoes",
     *      name="inscricoes"
     * )
     */
    public function inscricoesAction()
    {
        return $this->render('site/inscricoes.html.twig');
    }

    /**
     * @Route(
     *      path="/submissao",
     *      name="submissao"
     * )
     */
    public function submissaoAction()
    {
        return $this->render('site/submissao.html.twig');
    }


    /**
     * @Route(
     *      path="/exemplo",
     *      name="exemplo"
     * )
     * @return Response
     */
    public function exemploAction()
    {
        $html = file_get_contents('normas.pdf');
        $headers = array(
            'Content-type' => 'application/pdf'
        );
        $response = new Response($html,200,$headers);
        return $response;
    }
}
