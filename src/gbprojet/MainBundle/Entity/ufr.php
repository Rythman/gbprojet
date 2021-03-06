<?php

namespace gbprojet\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ufr
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gbprojet\MainBundle\Entity\ufrRepository")
 */
class ufr
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
     * @ORM\OneToOne(targetEntity="gbprojet\MainBundle\Entity\image", cascade="persist")
     * @ORM\JoinColumn(nullable=True)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="sigle", type="string", length=10)
     */
    private $sigle;


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
     * Set designation
     *
     * @param string $designation
     *
     * @return ufr
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
     * Set sigle
     *
     * @param string $sigle
     *
     * @return ufr
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;

        return $this;
    }

    /**
     * Get sigle
     *
     * @return string
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * Set image
     *
     * @param \gbprojet\MainBundle\Entity\image $image
     *
     * @return ufr
     */
    public function setImage(\gbprojet\MainBundle\Entity\image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \gbprojet\MainBundle\Entity\image
     */
    public function getImage()
    {
        return $this->image;
    }
}
