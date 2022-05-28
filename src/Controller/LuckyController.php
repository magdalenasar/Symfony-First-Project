<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number2", name="my_new_route")
     * @throws Exception
     */
    public function number(): Response
    {
        $number = random_int(0, 100);
//        dd($number);

//        return new Response(
//            '<html lang="eng"><body><h1>Lucky number: '.$number.'</h1></body></html>'
//        );
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}