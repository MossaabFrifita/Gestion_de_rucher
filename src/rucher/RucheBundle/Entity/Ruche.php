<?php

namespace rucher\RucheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ruche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="rucher\RucheBundle\Entity\RucheRepository")
 */
class Ruche
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
     * @ORM\Column(name="NomRuche", type="string", length=255)
     */
    private $nomRuche;

    /**
     * @var string
     *
     * @ORM\Column(name="Position", type="string", length=255)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdApiculteur", type="integer")
     */
    private $idApiculteur;


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
     * Set nomRuche
     *
     * @param string $nomRuche
     *
     * @return Ruche
     */
    public function setNomRuche($nomRuche)
    {
        $this->nomRuche = $nomRuche;

        return $this;
    }

    /**
     * Get nomRuche
     *
     * @return string
     */
    public function getNomRuche()
    {
        return $this->nomRuche;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Ruche
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set idApiculteur
     *
     * @param integer $idApiculteur
     *
     * @return Ruche
     */
    public function setIdApiculteur($idApiculteur)
    {
        $this->idApiculteur = $idApiculteur;

        return $this;
    }

    /**
     * Get idApiculteur
     *
     * @return integer
     */
    public function getIdApiculteur()
    {
        return $this->idApiculteur;
    }
}

