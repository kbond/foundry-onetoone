<?php

namespace App\Entity;

use App\Repository\ProductInfoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductInfoRepository::class)
 */
class ProductInfo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Product::class, mappedBy="productInfo", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        // unset the owning side of the relation if necessary
        if ($product === null && $this->product !== null) {
            $this->product->setProductInfo(null);
        }

        // set the owning side of the relation if necessary
        if ($product !== null && $product->getProductInfo() !== $this) {
            $product->setProductInfo($this);
        }

        $this->product = $product;

        return $this;
    }
}
