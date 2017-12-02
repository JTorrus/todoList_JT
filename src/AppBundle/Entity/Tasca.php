<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasca
 *
 * @ORM\Table(name="tasca")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TascaRepository")
 */
class Tasca
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
     * @ORM\Column(name="titol", type="string", length=50)
     */
    private $titol;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime")
     */
    private $data;


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
     * Set titol
     *
     * @param string $titol
     *
     * @return Tasca
     */
    public function setTitol($titol)
    {
        $this->titol = $titol;

        return $this;
    }

    /**
     * Get titol
     *
     * @return string
     */
    public function getTitol()
    {
        return $this->titol;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Tasca
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }
}

