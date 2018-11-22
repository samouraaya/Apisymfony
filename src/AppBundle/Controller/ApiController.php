<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class ApiController extends FOSRestController
{
    /*
     * @Rest\Get
     * @Rest\View()
     */
    public function indexTestExempleAction()
    {
        $em = $this->get('doctrine.orm.default_entity_manager');
        $data = $em->getRepository('CoreBundle:User')->findAll();
       // dump($data);exit();

        $d = [
            'status'=>'true',
            'data'=>'aaa'
        ];
        $view = $this->view($d, 200);


        return $this->handleView($view);
    }
}
