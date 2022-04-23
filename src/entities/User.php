<?php
// src/entities/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"name"})})
 */

class User
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
    private $name;
    /**
     * @ORM\Column(type="string")
     */
    private $password;
    /**
     * One user have One level. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Level", inversedBy="userLevel")
     *@ORM\JoinColumn(name="lastLevel", referencedColumnName="id")
     */
    private $lastLevel;
    /**
     * @ORM\Column(type="integer")
     */
    private $bonus;
    /**
     * @ORM\Column(type="string")
     */
    private $lastWord;
    
    public function __construct(){
        $this -> lastLevel = new ArrayCollection();
    }

    //setters

    public function setId($id){
        $this ->id = $id; 
    } 

    public function setName($name){
        $this ->name = $name; 
    }  

    public function setPassword($password){
        $this ->password = $password; 
    }
    
    public function setBonus($bonus){
        $this ->bonus = $bonus; 
    }

    public function setLastLevel($lastLevel){
        $this ->lastLevel = $lastLevel; 
    }

    public function setLastWord($lastWord){
        $this ->lastWord = $lastWord; 
    }
    
    //guetters

    public function getId(){
        return $this ->id; 
    } 

    public function getName(){
        return $this ->name; 
    }  

    public function getPassword(){
        return $this ->password; 
    }
    
    public function getBonus(){
        return $this ->bonus; 
    }

    public function getLastLevel(){
        return $this ->lastLevel; 
    }

    public function getLastWord(){
        return $this ->lastWord; 
    }

}