<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=ProductInfo::class, mappedBy="product", cascade={"persist", "remove"})
     */
    private $productInfo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductInfo(): ?ProductInfo
    {
        return $this->productInfo;
    }

    public function setProductInfo(ProductInfo $productInfo): self
    {
        // set the owning side of the relation if necessary
        if ($productInfo->getProduct() !== $this) {
            $productInfo->setProduct($this);
        }

        $this->productInfo = $productInfo;

        return $this;
    }
}
