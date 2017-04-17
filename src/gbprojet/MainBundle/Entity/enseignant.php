<?php

namespace gbprojet\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * enseignant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gbprojet\MainBundle\Entity\enseignantRepository")
 */
class enseignant
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
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\ufr")
     * @ORM\JoinColumn(nullable=False)
     */
    private $ufr;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="gbprojet\MainBundle\Entity\titre", cascade="persist")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=15)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="noms", type="string", length=100)
     */
    private $noms;

    /**
     * @var string
     *
     * @ORM\Column(name="prenoms", type="string", length=255)
     */
    private $prenoms;

    /**
     * @var string
     *
     * @ORM\Column(name="cni", type="string", length=30)
     */
    private $cni;

    /**
     * @var string
     *
     * @ORM\Column(name="contacts", type="string", length=40)
     */
    private $contacts;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;


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
     * Set matricule
     *
     * @param string $matricule
     *
     * @return enseignant
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set noms
     *
     * @param string $noms
     *
     * @return enseignant
     */
    public function setNoms($noms)
    {
        $this->noms = $noms;

        return $this;
    }

    /**
     * Get noms
     *
     * @return string
     */
    public function getNoms()
    {
        return $this->noms;
    }

    /**
     * Set prenoms
     *
     * @param string $prenoms
     *
     * @return enseignant
     */
    public function setPrenoms($prenoms)
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    /**
     * Get prenoms
     *
     * @return string
     */
    public function getPrenoms()
    {
        return $this->prenoms;
    }

    /**
     * Set cni
     *
     * @param string $cni
     *
     * @return enseignant
     */
    public function setCni($cni)
    {
        $this->cni = $cni;

        return $this;
    }

    /**
     * Get cni
     *
     * @return string
     */
    public function getCni()
    {
        return $this->cni;
    }

    /**
     * Set contacts
     *
     * @param string $contacts
     *
     * @return enseignant
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Get contacts
     *
     * @return string
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return enseignant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set image
     *
     * @param \gbprojet\MainBundle\Entity\image $image
     *
     * @return enseignant
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

    /**
     * Set ufr
     *
     * @param \gbprojet\MainBundle\Entity\ufr $ufr
     *
     * @return enseignant
     */
    public function setUfr(\gbprojet\MainBundle\Entity\ufr $ufr)
    {
        $this->ufr = $ufr;

        return $this;
    }

    /**
     * Get ufr
     *
     * @return \gbprojet\MainBundle\Entity\ufr
     */
    public function getUfr()
    {
        return $this->ufr;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->titre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add titre
     *
     * @param \gbprojet\MainBundle\Entity\titre $titre
     *
     * @return enseignant
     */
    public function addTitre(\gbprojet\MainBundle\Entity\titre $titre)
    {
        $this->titre[] = $titre;

        return $this;
    }

    /**
     * Remove titre
     *
     * @param \gbprojet\MainBundle\Entity\titre $titre
     */
    public function removeTitre(\gbprojet\MainBundle\Entity\titre $titre)
    {
        $this->titre->removeElement($titre);
    }

    /**
     * Get titre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTitre()
    {
        return $this->titre;
    }
}
