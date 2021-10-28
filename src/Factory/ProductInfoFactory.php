<?php

namespace App\Factory;

use App\Entity\ProductInfo;
use App\Repository\ProductInfoRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<ProductInfo>
 *
 * @method static ProductInfo|Proxy createOne(array $attributes = [])
 * @method static ProductInfo[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static ProductInfo|Proxy find(object|array|mixed $criteria)
 * @method static ProductInfo|Proxy findOrCreate(array $attributes)
 * @method static ProductInfo|Proxy first(string $sortedField = 'id')
 * @method static ProductInfo|Proxy last(string $sortedField = 'id')
 * @method static ProductInfo|Proxy random(array $attributes = [])
 * @method static ProductInfo|Proxy randomOrCreate(array $attributes = [])
 * @method static ProductInfo[]|Proxy[] all()
 * @method static ProductInfo[]|Proxy[] findBy(array $attributes)
 * @method static ProductInfo[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static ProductInfo[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ProductInfoRepository|RepositoryProxy repository()
 * @method ProductInfo|Proxy create(array|callable $attributes = [])
 */
final class ProductInfoFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(ProductInfo $productInfo) {})
        ;
    }

    protected static function getClass(): string
    {
        return ProductInfo::class;
    }
}
