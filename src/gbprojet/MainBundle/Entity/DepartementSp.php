<?php

namespace gbprojet\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepartementSp
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gbprojet\MainBundle\Entity\DepartementSpRepository")
 */
class DepartementSp
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\departement")
     */
    private $departement;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\sp")
     */
    private $sp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return DepartementSp
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return DepartementSp
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set departement
     *
     * @param \gbprojet\MainBundle\Entity\departement $departement
     *
     * @return DepartementSp
     */
    public function setDepartement(\gbprojet\MainBundle\Entity\departement $departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \gbprojet\MainBundle\Entity\departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set sp
     *
     * @param \gbprojet\MainBundle\Entity\sp $sp
     *
     * @return DepartementSp
     */
    public function setSp(\gbprojet\MainBundle\Entity\sp $sp)
    {
        $this->sp = $sp;

        return $this;
    }

    /**
     * Get sp
     *
     * @return \gbprojet\MainBundle\Entity\sp
     */
    public function getSp()
    {
        return $this->sp;
    }
}
