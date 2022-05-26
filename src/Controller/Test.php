<?php

namespace TestApp\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use TestApp\Service\Test as TestService;

class Test extends AbstractController
{
    protected $testService;
    
    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }
    
    /**
     * @Route("/test", methods={"GET"})
     */
    public function test() : JsonResponse
    {
        $info = "TEST";

        dump($info);
        die();

        return new JsonResponse(
            $info,
            JsonResponse::HTTP_OK
        );
    }

    
    /**
     * @Route("/test1", methods={"GET"})
     */
    public function test1() : JsonResponse
    {
        $info = "TEST01 feature-01!" . " " . $this->testService->test();

        dump($info);
        die();

        return new JsonResponse(
            $info,
            JsonResponse::HTTP_OK
        );
    }

    /**
     * @Route("/test2", methods={"GET"})
     */
    public function test2() : JsonResponse
    {
        $info = "TEST02!!!";

        dump($info);
        die();

        return new JsonResponse(
            $info,
            JsonResponse::HTTP_OK
        );
    }

}
