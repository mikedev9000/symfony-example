<?php

namespace Wilson\AtmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Wilson\AtmBundle\Entity\Person;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/create/mwilson")
     */
    public function createPersonAction()
    {
        $person = new Person();
        $person->setNameFirst('Mike');
        $person->setNameLast('Wilson');
        $person->setNameMiddle('Mark');
        $person->setDateOfBirth(new \DateTime('01/21/1988'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($person);
        $em->flush();

        return $this->render('json', compact('person'));
    }
}
