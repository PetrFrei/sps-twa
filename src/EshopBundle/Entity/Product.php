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
 *
 * @author freipe
 * @ORM\Entity()
 */
class Product {
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
     * @ORM\Column(type="float")
     */
    private $price;
    /**
     * @ORM\ManyToOne(targetEntity="EshopBundle\Entity\Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", nullable=true, referencedColumnName="id")
     */
    private $category;
    /**
     *
     * @ORM\Column(type="boolean")
     */
    private $active;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $stock;
    
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getUrl() {
        return $this->url;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getActive() {
        return $this->active;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setActive($active) {
        $this->active = $active;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }




}
