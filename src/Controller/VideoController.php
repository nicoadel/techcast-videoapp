<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class VideoController extends AbstractController
{
    

    /**
    * @Route("/videos/video{id}", name="videos")
    * @return Response
    */
    public function index($video)
    {
        $videos = [
            '1' => ['name' => 'Sweeping Arches and Loops', 'file' => 'video1.mp4'],
            '2' => ['name' => 'Black Holes Dancing with Stars', 'file' => 'video2.mp4']
         ];

         $videodata = $videos[$video];
         return $this->render('video.html.twig', ['videodata' => $videodata]);
    }
}