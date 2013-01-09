<?php

namespace Socialgeo\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WijkController extends Controller
{
    public function indexAction()
    {

        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');



        $variable = file_get_contents('http://datatank.gent.be/Grondgebied/Wijken.json');
        $decoded = json_decode($variable, true);
        $wijken = $decoded["Wijken"];

        foreach ($wijken['wijk'] as $wijk)
        {
            var_dump("wijk:". $wijken['wijk'] ."\n");
        };

        die;


        $data = array('csrf_generated' => $csrfToken, 'json' => $decoded );

        return $this->render('EventBundle:Wijk:wijk.html.twig', $data );
    }

    public function showwijkAction($naam)
    {



    }


}
