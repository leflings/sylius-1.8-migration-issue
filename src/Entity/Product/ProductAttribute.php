<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Attribute\Model\AttributeTranslationInterface;
use Sylius\Component\Product\Model\ProductAttribute as BaseProductAttribute;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product_attribute")
 */
class ProductAttribute extends BaseProductAttribute
{
    /**
     * @ORM\Column(type="string", options={"default": "terms"})
     */
    protected string $facetType;

    public function getFacetType(): string
    {
        return $this->facetType;
    }

    public function setFacetType(string $facetType): void
    {
        $this->facetType = $facetType;
    }

    protected function createTranslation(): AttributeTranslationInterface
    {
        return new ProductAttributeTranslation();
    }
}
