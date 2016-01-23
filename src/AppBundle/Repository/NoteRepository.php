<?php

namespace AppBundle\Repository;
use AppBundle\Entity\Note;
use Symfony\Component\HttpFoundation\ParameterBag;

class NoteRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * @param ParameterBag $parameters
     * @param array $labels
     * @return Note
     */
    public function createFromParameters(ParameterBag $parameters, array $labels)
    {
        $note = new Note();
        $this->update($note, $parameters);
        array_walk($labels, [$note, 'addLabel']);

        $this->getEntityManager()->persist( $note );
        $this->getEntityManager()->flush();

        return $note;
    }

    /**
     * @param Note $note
     * @param ParameterBag $parameters
     * @param array $labels
     * @return Note
     */
    public function updateFromParameters(Note $note, ParameterBag $parameters, array $labels)
    {
        /** @var PersistentCollection $labels */
        $labelsSnapshot = $note->getLabels()->toArray();

        $toDelete = $this->getDeleteDiff($labelsSnapshot, $labels);
        array_walk($toDelete, [$note, 'removeLabel']);

        $toInsert = $this->getInsertDiff($labelsSnapshot, $labels);
        array_walk($toInsert, [$note, 'addLabel']);

        $this->update($note, $parameters);

        $this->getEntityManager()->flush();

        return $note;
    }

    private function update(Note $note, ParameterBag $parameters)
    {
        $note->setTitle($parameters->get('title'));
        $note->setColor($parameters->get('color'));
        $note->setContent($parameters->get('content'));

        return $note;
    }

    private function getDeleteDiff($snapshot, $current)
    {
        return array_udiff_assoc(
            $snapshot,
            $current,
            function($a, $b) { return $a === $b ? 0 : 1; }
        );
    }

    private function getInsertDiff($snapshot, $current)
    {
        return array_udiff_assoc(
            $current,
            $snapshot,
            function($a, $b) { return $a === $b ? 0 : 1; }
        );
    }
}
