<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuyerRepository")
 */
class Buyer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $companyName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $street;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $addressNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NIP;

    /**
     * @ORM\OneToMany(targetEntity="Invoice", mappedBy="buyer")
     */
    private $invoices;

    public function __construct() {
        $this->invoices = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return Invoice
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Invoice
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Invoice
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Invoice
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Get addressNumber
     *
     * @return string
     */
    public function getAddressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * Set addressNumber
     *
     * @param string $addressNumber
     * @return Invoice
     */
    public function setAddressNumber($addressNumber)
    {
        $this->addressNumber = $addressNumber;
    }

    /**
     * Get postNumber
     *
     * @return string
     */
    public function getPostNumber()
    {
        return $this->postNumber;
    }
    
    /**
     * Set getpostNumber
     *
     * @param string $postNumber
     * @return Invoice
     */
    public function setPostNumber($postNumber)
    {
        $this->postNumber = $postNumber;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * Set city
     *
     * @param string $city
     * @return Invoice
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get NIP
     *
     * @return string
     */
    public function getNIP()
    {
        return $this->NIP;
    }
    
    /**
     * Set NIP
     *
     * @param string $NIP
     * @return Invoice
     */
    public function setNIP($NIP)
    {
        $this->NIP = $NIP;
    }

     /**
     * Get invoices
     *
     */
    public function getInvoices()
    {
        return $this->invoices;
    }


}