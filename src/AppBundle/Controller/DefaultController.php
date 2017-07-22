<?php

namespace AppBundle\Controller;

use AppBundle\ChartsAndGraphs\Drawer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need

        $drawer = new Drawer();
        $drawer->columnChart();
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//        ]);

        return $this->render('dashboard/home.html.twig', array(
            'chart' => $drawer,
        ));

    }
}
