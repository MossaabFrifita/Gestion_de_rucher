<?php

namespace rucher\RucheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Production
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="rucher\RucheBundle\Entity\ProductionRepository")
 */
class Production
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
     * @var integer
     *
     * @ORM\Column(name="poids", type="integer")
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="dateProd", type="string")
     */
    private $dateProd;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     *
     * @return Production
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return integer
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set dateProd
     *
     * @param \DateTime $dateProd
     *
     * @return Production
     */
    public function setDateProd($dateProd)
    {
        $this->dateProd = $dateProd;

        return $this;
    }

    /**
     * Get dateProd
     *
     * @return \DateTime
     */
    public function getDateProd()
    {
        return $this->dateProd;
    }

    /**
     * Set idRuche
     *
     * @param integer $idRuche
     *
     * @return Production
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

