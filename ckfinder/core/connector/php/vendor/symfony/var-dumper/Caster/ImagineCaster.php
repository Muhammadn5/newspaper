<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Caster;

use Imagine\Image\ImageInterface;
use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class ImagineCaster
{
    public static function castImage(ImageInterface $c, array $a, Stub $stub, bool $isNested): array
    {
        $imgData = $c->get('png');
        if (\strlen($imgData) > 1 * 1000 * 1000) {
            $a += [
                Caster::PREFIX_VIRTUAL.'images' => new ConstStub($c->getSize()),
            ];
        } else {
            $a += [
                Caster::PREFIX_VIRTUAL.'images' => new ImgStub($imgData, 'images/png', $c->getSize()),
            ];
        }

        return $a;
    }
}
