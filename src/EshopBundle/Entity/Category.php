<?php
namespace EshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 * @author freipe
 * 
 * @ORM\Entity()
 */ 
class Category {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=128, unique=true)
     */
    private $url;
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    /**
     *
     * @ORM\OneToOne(targetEntity="EshopBundle\Entity\Product", mappedBy="parent")
     * @ORM\JoinColumn(nullable=true, referencedColumnName="id")
     */
    private $parent;
    /**
     * @ORM\OneToMany(targetEntity="EshopBundle\Entity\Product", mappedBy="category")
     */
    private $products;
    /**
     * @return mixed
     */
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getParent() {
        return $this->parent;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setParent($parent) {
        $this->parent = $parent;
    }
    public function getProducts() {
        return $this->products;
    }

    public function setProducts($products) {
        $this->products = $products;
    }




}
