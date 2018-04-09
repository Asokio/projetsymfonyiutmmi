<?php

use Doctrine\ORM\Mapping as ORM;

namespace AppBundle\Entity;
/**
 * @ORM\Entity @ORM\Table(name="products")
 * @ApiResource
 **/

class Competences {
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
     * @Column(type="integer")
     */
    private $niveau;
     /**
     * @Column(type="string")
     */
    private $desc;
    
    public function getId() {
        return $this->$id;
    }
    public function getName() {
        return $this->$name;
    }
    public function getNiveau() {
        return $this->$niveau;
    }
    public function getDesc() {
        return $this->$desc;
    }
    public function setId() {
        $this->id = $id;
    }
    public function setName() {
        $this->name = $name;
    }
    public function setNiveau() {
        $this->niveau = $niveau;
    }
    public function setDesc() {
        $this->desc = $desc;
    }
}