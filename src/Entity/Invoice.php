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
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="Seller", inversedBy="invoices")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id")
     */
    private $seller;

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

    public function getId()
    {
        return $this->id;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Invoice
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Invoice
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
    
}