<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of Front
 *
 * @author Yassine
 */
class FrontController extends Controller {
    public function indexAction()
    {
        $content = $this->get('templating')->render('AppBundle:Front:index.html.twig');
        return new Response($content);
    }
    public function formationAction()
    {
        $content = $this->get('templating')->render('AppBundle:Front:formation.html.twig');
        return new Response($content);
    }
    public function produitAction()
    {
        $content = $this->get('templating')->render('AppBundle:Front:produit.html.twig');
        return new Response($content);
    }
}
