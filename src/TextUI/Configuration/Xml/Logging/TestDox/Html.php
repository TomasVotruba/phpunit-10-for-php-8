<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration\Logging\TestDox;

use PHPUnit\TextUI\Configuration\File;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class Html
{
    /**
     * @readonly
     */
    private File $target;

    public function __construct(File $target)
    {
        $this->target = $target;
    }

    public function target(): File
    {
        return $this->target;
    }
}
