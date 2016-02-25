<?php

namespace AppBundle\Controller;

use AppBundle\Repository\Note\LabelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Repository\NoteRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Note;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


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
     * @Security("has_role('ROLE_USER')")
     */
    public function createAction(Request $request)
    {
        $labelsIds = array_column($request->get('labels'), 'id');
        /** @var LabelRepository $labelRepository */
        $labelRepository = $this->get('repository.note.label');
        /** @var Note\Label[] $labels */
        $labels = $labelRepository->findBy(['id' => $labelsIds]);

        /* @var NoteRepository $noteRepository */
        $noteRepository = $this->get('repository.note');
        $note = $noteRepository->createFromParameters($request->request, $labels);

        $noteNormalized = $this->get('serializer')->normalize($note);
        return new JsonResponse($noteNormalized);
    }
    /**
     * @Route("/note/{id}", name="note_update")
     * @Method("PUT")
     * @Security("has_role('ROLE_USER')")
     */
    public function updateAction(Request $request, Note $note)
    {
        $labelsIds = array_column($request->get('labels'), 'id');
        /** @var LabelRepository $labelRepository */
        $labelRepository = $this->get('repository.note.label');
        /** @var Note\Label[] $labels */
        $labels = $labelRepository->findBy(['id' => $labelsIds]);

        /* @var NoteRepository $noteRepository */
        $noteRepository = $this->get('repository.note');
        $note = $noteRepository->updateFromParameters($note, $request->request, $labels);

        $noteNormalized = $this->get('serializer')->normalize($note);
        return new JsonResponse($noteNormalized);
    }
    /**
     * @Route("/note/{id}", name="note_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_USER')")
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
