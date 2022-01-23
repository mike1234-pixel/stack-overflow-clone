<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController {
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response('this is coming from a controller');
    }

    /**
    * @Route("/questions/{slug}")
    */
    public function show($slug) {
        return new Response(sprintf('future page to show the question is "%s"', $slug));
    }
}
