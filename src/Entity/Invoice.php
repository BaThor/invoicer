<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Seller", inversedBy="invoices")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id")
     */
    private $seller;

    /**
     * @ORM\ManyToOne(targetEntity="Buyer", inversedBy="invoices")
     * @ORM\JoinColumn(name="buyer_id", referencedColumnName="id")
     */
    private $buyer;

    /**
     * @ORM\Column(type="integer")
     */
    private $invoiceNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $paymentType;

  /**
    * @Assert\DateTime()
    * @ORM\Column(type="datetime")
    */
    private $invoiceDate;

  /**
    * @Assert\DateTime()
    * @ORM\Column(type="datetime")
    */
    private $paymentDate;

    /**
     * @ORM\Column(type="text", length=1000)
     */
    private $additionalInfo;


    public function getId()
    {
        return $this->id;
    }

    /**
     * Get seller
     *
    */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Set seller
     *
     * @param $seller
     * @return Seller
     */
    public function setSeller(Seller $seller)
    {
        $this->seller = $seller;
    }
   
    /**
     * Get buyer
     *
    */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Set buyer
     *
     * @param $buyer
     * @return Buyer
     */
    public function setBuyer(Buyer $buyer)
    {
        $this->buyer = $buyer;
    }

    /**
     * Get invoiceNumber
     *
     * @return integer
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set invoiceNumber
     *
     * @param integer $invoiceNumber
     * @return Invoice
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return Invoice
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Get invoiceDate
     *
     * @return datetime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set invoiceDate
     *
     * @param datetime $invoiceDate
     * @return Invoice
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
    }

    /**
     * Get paymentDate
     *
     * @return datetime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set paymentDate
     *
     * @param datetime $paymentDate
     * @return Invoice
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
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

}