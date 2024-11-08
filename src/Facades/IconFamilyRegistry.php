<?php

declare(strict_types=1);

namespace BaseCodeOy\BladeIcons\Facades;

use BaseCodeOy\BladeIcons\IconFamily;
use BaseCodeOy\BladeIcons\IconFamilyStyle;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Collection       all()
 * @method static ?IconFamily      findByName(string $family)
 * @method static ?IconFamily      findByPrefix(string $prefix)
 * @method static ?IconFamilyStyle findStyleByName(string $family, string $style)
 * @method static void             push(IconFamily $family)
 */
final class IconFamilyRegistry extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'blade-icons.icon-family-registry';
    }
}
