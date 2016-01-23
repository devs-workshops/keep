<?php

namespace AppBundle\Controller\Note;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Repository\Note\LabelRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Note;
use Symfony\Component\HttpFoundation\Request;

class LabelController extends Controller
{

    /**
     * @Route("/note/label", name="note_label_get_all")
     * @Method("GET")
     */
    public function getAllAction()
    {
        /** @var LabelRepository $labelRepository */
        $labelRepository = $this->get('repository.note.label');
        $labels = $labelRepository->findAll();
        $labelsNormalized = $this->get('serializer')->normalize($labels);
        return new JsonResponse($labelsNormalized);
    }

    /**
     * @Route("/note/label", name="note_label_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $label = new Note\Label();
        $label->setName($request->get('name'));

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $em->persist($label);
        $em->flush();

        $labelNormalized = $this->get('serializer')->normalize($label);
        return new JsonResponse($labelNormalized);
    }

    /**
     * @Route("/note/label/{id}", name="note_label_update")
     * @Method("PUT")
     */
    public function updateAction(Request $request, Note\Label $label)
    {
        $label->setName($request->get('name'));

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $em->persist($label);
        $em->flush();

        $labelNormalized = $this->get('serializer')->normalize($label);
        return new JsonResponse($labelNormalized);
    }

    /**
     * @Route("/note/label/{id}", name="note_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Note\Label $label)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $em->remove($label);
        $em->flush();

        return new JsonResponse([]);
    }
}