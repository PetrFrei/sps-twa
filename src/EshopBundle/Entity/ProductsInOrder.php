<?php
namespace EshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of User
 * @ORM\Entity()
 * @author Peta
 */
class ProductsInOrder {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="EshopBundle\Entity\Product", inversedBy="productsInOrder")
     */
    private $product;
    /**
     * @ORM\OneToMany(targetEntity="EshopBundle\Entity\Order", mappedBy="productsInOrder")
     */
    private $order;
    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;
    
    public function getId() {
        return $this->id;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getOrder() {
        return $this->order;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setProduct($product) {
        $this->product = $product;
    }

    public function setOrder($order) {
        $this->order = $order;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }


}
