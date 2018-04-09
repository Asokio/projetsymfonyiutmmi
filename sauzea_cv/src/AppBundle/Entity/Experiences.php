<?php

use Doctrine\ORM\Mapping as ORM;

namespace AppBundle\Entity;
/**
 * @ORM\Entity @ORM\Table(name="products")
 * @ApiResource
 **/

class Experiences {
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
     * @Column(type="string")
     */
    private $date;
     /**
     * @Column(type="date")
     */
    private $lieu;
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
    public function getDate() {
        return $this->$date;
    }
    public function getLieu() {
        return $this->$lieu;
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
    public function setDate() {
        $this->jour = $date;
    }
    public function setLieu() {
        $this->lieu = $lieu;
    }
    public function setDesc() {
        $this->desc = $desc;
    }
}