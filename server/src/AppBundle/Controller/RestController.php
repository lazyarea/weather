<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class RestController extends BaseController
{
    /**
     * @Route("/rest/", name="restpage")
     */
    public function indexAction(Request $request)
    {
        $data =  json_decode(file_get_contents('php://input'));
        return new JsonResponse($data);
    }
}
