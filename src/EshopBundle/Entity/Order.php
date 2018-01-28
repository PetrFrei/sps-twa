<?php
namespace EshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of User
 * @ORM\Entity()
 * @author Peta
 */
class Order {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateOfCreation;
    /**
     * @ORM\Column(type="float")
     */
    private $totalPrice;
    /**
     * @ORM\Column(type="text")
     */
    private $note;
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $adress;
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $surrname;
    /**
     * @ORM\Column(type="string", unique=true, length=128)
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=16)
     */
    private $telephone;
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $status;
    /**
     * @ORM\OneToMany(targetEntity="EshopBundle\Entity\Discount", mappedBy="order")
     */
    private $discount;
    
    public function getDiscount() {
        return $this->discount;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
    }

        
    public function getId() {
        return $this->id;
    }

    public function getDateOfCreation() {
        return $this->dateOfCreation;
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }

    public function getNote() {
        return $this->note;
    }

    public function getAdress() {
        return $this->adress;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurrname() {
        return $this->surrname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDateOfCreation($dateOfCreation) {
        $this->dateOfCreation = $dateOfCreation;
    }

    public function setTotalPrice($totalPrice) {
        $this->totalPrice = $totalPrice;
    }

    public function setNote($note) {
        $this->note = $note;
    }

    public function setAdress($adress) {
        $this->adress = $adress;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSurrname($surrname) {
        $this->surrname = $surrname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}
