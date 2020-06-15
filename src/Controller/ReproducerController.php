<?php


namespace App\Controller;


use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ReproducerController extends AbstractFOSRestController
{
    /**
     * @Route(path="reproduce")
     * @Rest\View()
     */
    public function reproduce()
    {
        throw new AccessDeniedHttpException('access denied');
    }
}
