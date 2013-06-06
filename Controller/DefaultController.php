<?php

namespace Klesk\SliderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KleskSliderBundle:Default:index.html.twig', array('name' => $name));
    }
}
