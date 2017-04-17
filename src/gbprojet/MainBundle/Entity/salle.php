<?php

namespace gbprojet\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * salle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gbprojet\MainBundle\Entity\salleRepository")
 */
class salle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\typesalle")
     * @ORM\JoinColumn(nullable=False)
     */
    private $typesalle;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\batiment")
     * @ORM\JoinColumn(nullable=False)
     */
    private $batiment;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=100)
     */
    private $designation;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="smallint")
     */
    private $capacite;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return salle
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return salle
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return salle
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set typesalle
     *
     * @param \gbprojet\MainBundle\Entity\typesalle $typesalle
     *
     * @return salle
     */
    public function setTypesalle(\gbprojet\MainBundle\Entity\typesalle $typesalle)
    {
        $this->typesalle = $typesalle;

        return $this;
    }

    /**
     * Get typesalle
     *
     * @return \gbprojet\MainBundle\Entity\typesalle
     */
    public function getTypesalle()
    {
        return $this->typesalle;
    }

    /**
     * Set batiment
     *
     * @param \gbprojet\MainBundle\Entity\batiment $batiment
     *
     * @return salle
     */
    public function setBatiment(\gbprojet\MainBundle\Entity\batiment $batiment)
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get batiment
     *
     * @return \gbprojet\MainBundle\Entity\batiment
     */
    public function getBatiment()
    {
        return $this->batiment;
    }
}
