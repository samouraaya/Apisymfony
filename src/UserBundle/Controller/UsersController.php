<?php
/**
 * Created by PhpStorm.
 * User: wiem
 * Date: 16/11/18
 * Time: 02:57 م
 */

namespace UserBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;

class UsersController extends FOSRestController
{
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();


        $data = $em->getRepository('CoreBundle:User')->findAll();

        $view = $this->view($data, 200)
            ->setTemplate("MyBundle:Users:getUsers.html.twig")
            ->setTemplateVar('users')
        ;

        return $this->handleView($view);
    }

    public function redirectAction()
    {
        $view = $this->redirectView($this->generateUrl('some_route'), 301);
        // or

        return $this->handleView($view);
    }
}