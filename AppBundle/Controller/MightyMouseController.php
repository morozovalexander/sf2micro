<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerAware;

class MightyMouseController extends ContainerAware
{
    /**
     * @Route("/")
     */
    public function rescueAction()
    {
        $html = $this->container->get('twig')->render(
            'mighty_mouse/rescue.html.twig',
            array('quote' => 'Here I come to save the day!')
        );

        return new Response($html);
    }

}