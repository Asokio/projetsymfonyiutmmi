<?php

use Doctrine\ORM\Mapping as ORM;

namespace AppBundle\Entity;

/**
 * @ORM\Entity @ORM\Table(name="products")
 * @ApiResource
 **/

class Formation {
    
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;
     /**
     * @Column(type="string")
     */
    private $name;
     /**
     * @Column(type="date")
     */
    private $dateDebut;
     /**
     * @Column(type="date")
     */
    private $dateFin;
     /**
     * @Column(type="string")
     */
    private $lieu;

    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    
    public function getDateFin()
    {
        return $this->dateFin;
    }
    
    public function getLieu()
    {
        return $this->lieu;    
    }
    public function setId($id)
    {
        $this->id = $id;    
    }
    public function setName($name)
    {
        $this->name = $name;    
    }
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;    
    }
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;    
    }
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;    
    }
} 