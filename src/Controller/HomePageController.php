<?php

namespace App\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends AbstractController
{

    /**
     * @Route("/", name="homepage", methods={"GET"})
     * return Response
     */
    public function index(): Response
    {
        // Dizi oluşturuldu.
        $customerInfos=[[
            'name'=>'Nick',
            'surname'=>'Smith',
            'email'=>'nicksmith@gmail.com'
        ],[
            'name'=>'Michael',
            'surname'=>'Jackson',
            'email'=>'michaeljackson@gmail.com'
        ],[
            'name'=>'John',
            'surname'=>'Wick',
            'email'=>'johnwick@continental.com'
        ]];
        // Dizi içerisindeki verileri view'a gönderildi
        return $this->render('home_page/index.html.twig',[
            'controller_name' => 'Home Page',
            'customerInfos'=>$customerInfos
        ]);
    }
}