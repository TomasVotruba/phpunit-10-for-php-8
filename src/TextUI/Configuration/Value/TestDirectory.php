<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Configuration;

use PHPUnit\Util\VersionComparisonOperator;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class TestDirectory
{
    /**
     * @readonly
     */
    private string $path;
    /**
     * @readonly
     */
    private string $prefix;
    /**
     * @readonly
     */
    private string $suffix;
    /**
     * @readonly
     */
    private string $phpVersion;
    /**
     * @readonly
     */
    private VersionComparisonOperator $phpVersionOperator;

    public function __construct(string $path, string $prefix, string $suffix, string $phpVersion, VersionComparisonOperator $phpVersionOperator)
    {
        $this->path               = $path;
        $this->prefix             = $prefix;
        $this->suffix             = $suffix;
        $this->phpVersion         = $phpVersion;
        $this->phpVersionOperator = $phpVersionOperator;
    }

    public function path(): string
    {
        return $this->path;
    }

    public function prefix(): string
    {
        return $this->prefix;
    }

    public function suffix(): string
    {
        return $this->suffix;
    }

    public function phpVersion(): string
    {
        return $this->phpVersion;
    }

    public function phpVersionOperator(): VersionComparisonOperator
    {
        return $this->phpVersionOperator;
    }
}
