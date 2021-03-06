<?php

declare(strict_types=1);

namespace Setono\SyliusFeedPlugin\Feed\Model\Google\Shopping;

use Setono\SyliusFeedPlugin\Feed\Model\Enum;

final class Availability extends Enum
{
    private const IN_STOCK = 'in stock';

    private const OUT_OF_STOCK = 'out of stock';

    private const PREORDER = 'preorder';

    public static function inStock(): self
    {
        return self::constant(self::IN_STOCK);
    }

    public static function outOfStock(): self
    {
        return self::constant(self::OUT_OF_STOCK);
    }

    public static function preorder(): self
    {
        return self::constant(self::PREORDER);
    }

    public static function getValues(): array
    {
        return [
            self::IN_STOCK,
            self::OUT_OF_STOCK,
            self::PREORDER,
        ];
    }
}
