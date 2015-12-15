<?php

namespace CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CrudController extends Controller
{
    public function indexAction()
    {
        return $this->render('CrudBundle:Crud:index.html.twig');
    }
}
