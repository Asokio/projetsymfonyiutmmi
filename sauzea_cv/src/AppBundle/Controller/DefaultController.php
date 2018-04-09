<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\LoisirType;
use AppBundle\Entity\Loisir;
use AppBundle\Entity\Formation;
// src/Controller/WelcomeController.php

// ...
use Symfony\Component\Routing\Annotation\Routes;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}", name="homepage")
     * @Template()
     */
    public function indexAction($name = "tot")
    {
        return array('name' => $name);
    }
    /**
     * @Routes("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
    /**
     * @Route("/loisirs")
     */
class LoisirController extends Controller{
    /**
     * @Route("/create", name="create-loisir")
     * @Template()
     */
     public function createAction()
     {
         $loisir = new Loisir();
         $form = $this->createForm(LoisirType::class, $loisir);
         
         return array(
            'entity' => $loisir,
            'form' => $form->createView(),
         );
     }
}

class WelcomeController extends Controller
{
    /**
     * @Routes("/", name="welcome")
     */
    public function index()
    {
        
    }
}