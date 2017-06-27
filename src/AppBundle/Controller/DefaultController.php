<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Card;
use AppBundle\Entity\Link;
use AppBundle\Helper\CardHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

  /**
   * @Route("/", name="homepage")
   */
  public function indexAction(Request $request)
  {
    $links = $this->getDoctrine()->getRepository('AppBundle:Link')->findAll();

    $cards = $this->getDoctrine()->getRepository('AppBundle:Card')->findAll();
    $stats = $this->getDoctrine()->getRepository('AppBundle:Stats')->findAll();
/*    $data = [];

    foreach ($stats as $row) {
      @$data[$row->getLink()->getId()]['clicks'] += $row->getClicks();
      @$data[$row->getLink()->getId()]['impressions'] = $row->getImpressions();
    }*/

    // replace this example code with whatever you need
    return $this->render('default/index.html.twig', [
        'cards' => $cards,
//        'stats' => $data
    ]);
  }

  /**
   * @Route("/card/add", name="card.add")
   */
  public function cardAddAction(Request $request)
  {

    if ($request->isMethod('post')) {
      $card = (new Card())
        ->setCardName($request->request->get('cardName'))
	->setPowerOneName($request->request->get('powerOneName'))
	->setPowerOneValue($request->request->get('powerOneValue'))
	->setPowerTwoName($request->request->get('powerTwoName'))
	->setPowerTwoValue($request->request->get('powerTwoValue'))
      ;

      $em = $this->getDoctrine()->getManager();
      $em->persist($card);
      $em->flush();

      $this->addFlash('success', 'Card added successfully');

      return $this->redirectToRoute('homepage');
    }

    // replace this example code with whatever you need
    return $this->render('forms/card.html.twig', [
    ]);
  }

  /**
   * @Route("/card/edit/{cardId}", name="card.edit")
   * @param Request $request
   */
  public function cardEditAction(Request $request, $cardId)
  {
    $cardEntry = $this->getDoctrine()->getRepository('AppBundle:Card')->findOneBy(array('id' => $cardId));
    // updating entry when form submitted
    if ($request->isMethod('post')) {
      $cardEntry->setName($request->request->get('cardName'))
	      ->setPowerOneName($request->request->get('powerOneName'))
	      ->setPowerOneValue($request->request->get('powerOneValue'))
	      ->setPowerTwoName($request->request->get('powerTwoName'))
	      ->setPowerTwoValue($request->request->get('powerTwoValue'));
      
      $em = $this->getDoctrine()->getManager();
      $em->persist($cardEntry);
      $em->flush();
      
      $this->addFlash('success', 'Card updated successfully');
      
      return $this->redirectToRoute('homepage');
      
    } else {
      // display edit form
      return $this->render('forms/card.edit.html.twig',[
        'cardEntry' => $cardEntry
      ]);
    }
  }

}
