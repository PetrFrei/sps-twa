<?php
namespace EshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of User
 * @ORM\Entity()
 * @author Peta
 */
class User {
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
     * @ORM\Column(type="string", length=128)
     */
    private $surrname;
    /**
     * @ORM\Column(type="string", unique=true, length=128)
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $heslo;
    /**
     * @ORM\Column(type="string", length=16)
     */
    private $role;
    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $adress;
    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $telephone;
    
    public function getId() {
        return $this->id;
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

    public function getHeslo() {
        return $this->heslo;
    }

    public function getRole() {
        return $this->role;
    }

    public function getAdress() {
        return $this->adress;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function setId($id) {
        $this->id = $id;
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

    public function setHeslo($heslo) {
        $this->heslo = $heslo;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setAdress($adress) {
        $this->adress = $adress;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }


}
