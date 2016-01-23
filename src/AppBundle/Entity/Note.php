<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoteRepository")
 */
class Note
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=1000, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=20, nullable=true)
     */
    private $color;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Note\Label")
     * @ORM\JoinTable(name="notes_swb_labels",
     *      joinColumns={@ORM\JoinColumn(name="note_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="label_id", referencedColumnName="id")}
     *      )
     */
    private $labels;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Note
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Note
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Note
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->labels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add label
     *
     * @param \AppBundle\Entity\Note\Label $label
     *
     * @return Note
     */
    public function addLabel(\AppBundle\Entity\Note\Label $label)
    {
        $this->labels[] = $label;

        return $this;
    }

    /**
     * Remove label
     *
     * @param \AppBundle\Entity\Note\Label $label
     */
    public function removeLabel(\AppBundle\Entity\Note\Label $label)
    {
        $this->labels->removeElement($label);
    }

    /**
     * Get labels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLabels()
    {
        return $this->labels;
    }
}
