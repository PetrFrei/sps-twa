<?php
namespace EshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of User
 * @ORM\Entity()
 * @author Peta
 */
class Discount {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $name;
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    /**
     * @ORM\Column(type="float")
     */
    private $percent;
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $code;
    /**
     * @ORM\Column(type="boolean")
     */
    private $applied;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $validityTo;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPercent() {
        return $this->percent;
    }

    public function getCode() {
        return $this->code;
    }

    public function getApplied() {
        return $this->applied;
    }

    public function getValidityTo() {
        return $this->validityTo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPercent($percent) {
        $this->percent = $percent;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setApplied($applied) {
        $this->applied = $applied;
    }

    public function setValidityTo($validityTo) {
        $this->validityTo = $validityTo;
    }


    
}
