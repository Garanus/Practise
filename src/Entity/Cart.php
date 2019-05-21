<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cart
 *
 * @ORM\Table(name="cart", indexes={@ORM\Index(name="fk_cart_user_idx", columns={"user_id"}), @ORM\Index(name="fk_cart_products_idx", columns={"products_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CartRepository")
 */
class Cart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cart_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=false)
     */
    private $status;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="user", cascade={"detach", "merge", "persist", "refresh"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */

    private $userCart;

    /**
     * @var Products
     *
     * @ORM\ManyToOne(targetEntity="Products", inversedBy="products", cascade={"detach", "merge", "persist", "refresh"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="products_id", referencedColumnName="id")
     * })
     */
    private $productsCart;

    /**
     * @return int
     */


    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return User
     */
    public function getUserCart(): User
    {
        return $this->userCart;
    }

    /**
     * @param User $userCart
     */
    public function setUserCart(User $userCart): void
    {
        $this->userCart = $userCart;
    }

    /**
     * @return Products
     */
    public function getProductsCart(): Products
    {
        return $this->productsCart;
    }

    /**
     * @param Products $productsCart
     */
    public function setProductsCart(Products $productsCart): void
    {
        $this->productsCart = $productsCart;
    }

}
