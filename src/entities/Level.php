<?php
// src/entities/Level.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="levels")
 */

class Level
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $level;
    /**
     * @ORM\Column(type="string")
     */
    private $mot;
    /** One level have Many user.
     * @ORM\OneToMany(targetEntity="User", mappedBy="levels")
     */
    private $userLevel;
    
    public function __construct(){

    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    } 

    public function setLevel($level){
        $this ->level = $level; 
    }

    public function setMot($mot){
        $this ->mot = $mot; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    } 

    public function getLevel(){
        return $this ->level; 
    }

    public function getMot(){
        return $this ->mot; 
    }

}