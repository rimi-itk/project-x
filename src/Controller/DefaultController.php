<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/")
     */
		public function index()
    {
        return new Response(
            '<html><body>Hep! '.(new \DateTime())->format(\DateTime::ATOM).'</body></html>'
        );
    }
}
