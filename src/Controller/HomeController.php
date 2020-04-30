<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController {
  /**
  * @Route("/")
  */
  public function index()
  {
    return new Response('<h1>it works</h1>');
  }
}
