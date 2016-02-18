<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Repository\NoteRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Note;
use Symfony\Component\HttpFoundation\Request;


class NoteController extends Controller
{
    /**
     * @Route("/note", name="note_get_all")
     * @Method("GET")
     */
    public function getAllAction()
    {
        /** @var NoteRepository $noteRepository */
        $noteRepository = $this->get('repository.note');
        $notes = $noteRepository->findBy(array(), array('id'=>'DESC'));
        $notesNormalized = $this->get('serializer')->normalize($notes);
        return new JsonResponse($notesNormalized);
    }

    /**
     * @Route("/note", name="note_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $note = new Note();
        $note->setTitle($request->get('title'));
        $note->setContent($request->get('content'));
        $note->setColor($request->get('color'));

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $em->persist($note);
        $em->flush();

        $noteNormalized = $this->get('serializer')->normalize($note);
        return new JsonResponse($noteNormalized);
    }
    /**
     * @Route("/note/{id}", name="note_update")
     * @Method("PUT")
     */
    public function updateAction(Request $request, Note $note)
    {
        $note->setTitle($request->get('title'));
        $note->setContent($request->get('content'));
        $note->setColor($request->get('color'));

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $em->persist($note);
        $em->flush();

        $noteNormalized = $this->get('serializer')->normalize($note);
        return new JsonResponse($noteNormalized);
    }
    /**
     * @Route("/note/{id}", name="note_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Note $note)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $em->remove($note);
        $em->flush();

        return new JsonResponse([]);
    }
}
