<?php

namespace rucher\RucheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intervention
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="rucher\RucheBundle\Entity\InterventionRepository")
 */
class Intervention
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
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRuche", type="integer")
     */
    private $idRuche;


    /**
     * Get id
     *
     * @return integer
     */
         function __construct(){
         
        $this->date= new \DateTime();
         
     }
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Intervention
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Intervention
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idRuche
     *
     * @param integer $idRuche
     *
     * @return Intervention
     */
    public function setIdRuche($idRuche)
    {
        $this->idRuche = $idRuche;

        return $this;
    }

    /**
     * Get idRuche
     *
     * @return integer
     */
    public function getIdRuche()
    {
        return $this->idRuche;
    }
}

