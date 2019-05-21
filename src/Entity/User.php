<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="email_UNIQUE", columns={"email"}), @ORM\UniqueConstraint(name="phone_number_UNIQUE", columns={"phone_number"})})
 * @ORM\Entity
 */
class User implements UserInterface  {
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=30, nullable=false)
     */
    private $firstName;
    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=40, nullable=false)
     */
    private $lastName;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=60, nullable=false)
     */
    private $password;
    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=15, nullable=false)
     */
    private $phoneNumber;
    /**
     * @ORM\ManyToOne(targetEntity="Products", inversedBy="products_id")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=true)
     */
    private $shopProducts;

    /**
     * @ORM\ManyToOne(targetEntity="Cart", inversedBy="cart_id")
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id", nullable=true)
     */
    private $shopCart;


    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->shopProducts = new ArrayCollection();
        $this->shopCart=new ArrayCollection();
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
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }
    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }


    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return array('ROLE_USER');
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return array (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }
    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }
    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->email;
    }
    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        return;
    }

    /**
     * @return mixed
     */
    public function getShopProducts()
    {
        return $this->shopProducts;
    }

    /**
     * @param mixed $shopProducts
     */
    public function setShopProducts($shopProducts): void
    {
        $this->shopProducts = $shopProducts;
    }

    /**
     * @return mixed
     */
    public function getShopCart()
    {
        return $this->shopCart;
    }

    /**
     * @param mixed $shopCart
     */
    public function setShopCart($shopCart): void
    {
        $this->shopCart = $shopCart;
    }


}