<?php

namespace gbprojet\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepartementEcue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gbprojet\MainBundle\Entity\DepartementEcueRepository")
 */
class DepartementEcue
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\departement")
     */
    private $departement;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\ecue")
     */
    private $ecue;

    /**
     * @var string
     *
     * @ORM\Column(name="prefixe", type="string", length=15)
     */
    private $prefixe;

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="smallint")
     */
    private $credit;
    

    /**
     * Set prefixe
     *
     * @param string $prefixe
     *
     * @return DepartementEcue
     */
    public function setPrefixe($prefixe)
    {
        $this->prefixe = $prefixe;

        return $this;
    }

    /**
     * Get prefixe
     *
     * @return string
     */
    public function getPrefixe()
    {
        return $this->prefixe;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     *
     * @return DepartementEcue
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set departement
     *
     * @param \gbprojet\MainBundle\Entity\departement $departement
     *
     * @return DepartementEcue
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
     * Set ecue
     *
     * @param \gbprojet\MainBundle\Entity\ecue $ecue
     *
     * @return DepartementEcue
     */
    public function setEcue(\gbprojet\MainBundle\Entity\ecue $ecue)
    {
        $this->ecue = $ecue;

        return $this;
    }

    /**
     * Get ecue
     *
     * @return \gbprojet\MainBundle\Entity\ecue
     */
    public function getEcue()
    {
        return $this->ecue;
    }
}
