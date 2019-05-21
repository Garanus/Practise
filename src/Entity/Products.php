<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products", uniqueConstraints={@ORM\UniqueConstraint(name="catalogNumber", columns={"catalogNumber"})})
 * @ORM\Entity
 */
class Products
{
    /**
     * @var integer
     *
     * @ORM\Column(name="products_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="productName", type="string", length=30, nullable=false)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=6, nullable=false)
     */

    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=10, nullable=false)
     */

    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=false)
     */

    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="catalogNumber", type="string", length=10, nullable=false)
     */

    private $catalogNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=5, nullable=false)
     */

    private $size;

    /**
     * @var Cart
     *
     * @ORM\OneToMany(targetEntity="Cart", mappedBy="products", cascade={"all"})
     */
    private $carts;


    /**
     * Products constructor.
     */
    public function __construct()
    {
        $this->carts = new ArrayCollection();
    }

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
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCatalogNumber(): string
    {
        return $this->catalogNumber;
    }

    /**
     * @param string $catalogNumber
     */
    public function setCatalogNumber(string $catalogNumber): void
    {
        $this->catalogNumber = $catalogNumber;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    /**
     * @return Cart
     */
    public function getCarts(): Cart
    {
        return $this->carts;
    }

    /**
     * @param Cart $carts
     */
    public function setCarts(Cart $carts): void
    {
        $this->carts = $carts;
    }
}
