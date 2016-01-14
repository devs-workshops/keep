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
        $noteRepository = $this->getDoctrine()->getManager()->getRepository(Note::class);
        $notes = $noteRepository->findAll();
        $notesDto = $this->get('serializer')->normalize($notes);
        return new JsonResponse($notesDto);
    }
    /**
     * @Route("/note", name="note_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
    }
    /**
     * @Route("/note/{id}", name="note_update")
     * @Method("PUT")
     */
    public function updateAction(Request $request, Note $note)
    {
    }
    /**
     * @Route("/note/{id}", name="note_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Note $note)
    {
    }
}
