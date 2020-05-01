<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SellerRepository")
 */
class Seller
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
    private $companyStreet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $companyAddressNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $companyPostNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $companyCity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $companyNIP;

    /**
     * @ORM\Column(type="text", length=1000)
     */
    private $additionalInfo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bankAccountNumber;

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
     * Get companyStreet
     *
     * @return string
     */
    public function getCompanyStreet()
    {
        return $this->companyStreet;
    }

    /**
     * Set companyStreet
     *
     * @param string $companyStreet
     * @return Invoice
     */
    public function setCompanyStreet($companyStreet)
    {
        $this->companyStreet = $companyStreet;
    }

    /**
     * Get companyAddressNumber
     *
     * @return string
     */
    public function getCompanyAddressNumber()
    {
        return $this->companyAddressNumber;
    }

    /**
     * Set companyAddressNumber
     *
     * @param string $companyAddressNumber
     * @return Invoice
     */
    public function setCompanyAddressNumber($companyAddressNumber)
    {
        $this->companyAddressNumber = $companyAddressNumber;
    }

    /**
     * Get companyPostNumber
     *
     * @return string
     */
    public function getCompanyPostNumber()
    {
        return $this->companyPostNumber;
    }
    
    /**
     * Set getCompanyPostNumber
     *
     * @param string $companyPostNumber
     * @return Invoice
     */
    public function setCompanyPostNumber($companyPostNumber)
    {
        $this->companyPostNumber = $companyPostNumber;
    }

    /**
     * Get companyCity
     *
     * @return string
     */
    public function getCompanyCity()
    {
        return $this->companyCity;
    }
    
    /**
     * Set companyCity
     *
     * @param string $companyCity
     * @return Invoice
     */
    public function setCompanyCity($companyCity)
    {
        $this->companyCity = $companyCity;
    }

    /**
     * Get companyNIP
     *
     * @return string
     */
    public function getCompanyNIP()
    {
        return $this->companyNIP;
    }
    
    /**
     * Set companyNIP
     *
     * @param string $companyNIP
     * @return Invoice
     */
    public function setCompanyNIP($companyNIP)
    {
        $this->companyNIP = $companyNIP;
    }

    /**
     * Get additionalInfo
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
    
    /**
     * Set additionalInfo
     *
     * @param string $additionalInfo
     * @return Invoice
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * Get bankAccountNumber
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }
    
    /**
     * Set bankAccountNumber
     *
     * @param string $bankAccountNumber
     * @return Invoice
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;
    }

}