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

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class Source
{
    /**
     * @readonly
     */
    private FilterDirectoryCollection $includeDirectories;
    /**
     * @readonly
     */
    private FileCollection $includeFiles;
    /**
     * @readonly
     */
    private FilterDirectoryCollection $excludeDirectories;
    /**
     * @readonly
     */
    private FileCollection $excludeFiles;
    /**
     * @readonly
     */
    private bool $restrictDeprecations;
    /**
     * @readonly
     */
    private bool $restrictNotices;
    /**
     * @readonly
     */
    private bool $restrictWarnings;
    /**
     * @readonly
     */
    private bool $ignoreSuppressionOfDeprecations;
    /**
     * @readonly
     */
    private bool $ignoreSuppressionOfPhpDeprecations;
    /**
     * @readonly
     */
    private bool $ignoreSuppressionOfErrors;
    /**
     * @readonly
     */
    private bool $ignoreSuppressionOfNotices;
    /**
     * @readonly
     */
    private bool $ignoreSuppressionOfPhpNotices;
    /**
     * @readonly
     */
    private bool $ignoreSuppressionOfWarnings;
    /**
     * @readonly
     */
    private bool $ignoreSuppressionOfPhpWarnings;

    public function __construct(FilterDirectoryCollection $includeDirectories, FileCollection $includeFiles, FilterDirectoryCollection $excludeDirectories, FileCollection $excludeFiles, bool $restrictDeprecations, bool $restrictNotices, bool $restrictWarnings, bool $ignoreSuppressionOfDeprecations, bool $ignoreSuppressionOfPhpDeprecations, bool $ignoreSuppressionOfErrors, bool $ignoreSuppressionOfNotices, bool $ignoreSuppressionOfPhpNotices, bool $ignoreSuppressionOfWarnings, bool $ignoreSuppressionOfPhpWarnings)
    {
        $this->includeDirectories                 = $includeDirectories;
        $this->includeFiles                       = $includeFiles;
        $this->excludeDirectories                 = $excludeDirectories;
        $this->excludeFiles                       = $excludeFiles;
        $this->restrictDeprecations               = $restrictDeprecations;
        $this->restrictNotices                    = $restrictNotices;
        $this->restrictWarnings                   = $restrictWarnings;
        $this->ignoreSuppressionOfDeprecations    = $ignoreSuppressionOfDeprecations;
        $this->ignoreSuppressionOfPhpDeprecations = $ignoreSuppressionOfPhpDeprecations;
        $this->ignoreSuppressionOfErrors          = $ignoreSuppressionOfErrors;
        $this->ignoreSuppressionOfNotices         = $ignoreSuppressionOfNotices;
        $this->ignoreSuppressionOfPhpNotices      = $ignoreSuppressionOfPhpNotices;
        $this->ignoreSuppressionOfWarnings        = $ignoreSuppressionOfWarnings;
        $this->ignoreSuppressionOfPhpWarnings     = $ignoreSuppressionOfPhpWarnings;
    }

    public function includeDirectories(): FilterDirectoryCollection
    {
        return $this->includeDirectories;
    }

    public function includeFiles(): FileCollection
    {
        return $this->includeFiles;
    }

    public function excludeDirectories(): FilterDirectoryCollection
    {
        return $this->excludeDirectories;
    }

    public function excludeFiles(): FileCollection
    {
        return $this->excludeFiles;
    }

    public function notEmpty(): bool
    {
        return $this->includeDirectories->notEmpty() || $this->includeFiles->notEmpty();
    }

    public function restrictDeprecations(): bool
    {
        return $this->restrictDeprecations;
    }

    public function restrictNotices(): bool
    {
        return $this->restrictNotices;
    }

    public function restrictWarnings(): bool
    {
        return $this->restrictWarnings;
    }

    public function ignoreSuppressionOfDeprecations(): bool
    {
        return $this->ignoreSuppressionOfDeprecations;
    }

    public function ignoreSuppressionOfPhpDeprecations(): bool
    {
        return $this->ignoreSuppressionOfPhpDeprecations;
    }

    public function ignoreSuppressionOfErrors(): bool
    {
        return $this->ignoreSuppressionOfErrors;
    }

    public function ignoreSuppressionOfNotices(): bool
    {
        return $this->ignoreSuppressionOfNotices;
    }

    public function ignoreSuppressionOfPhpNotices(): bool
    {
        return $this->ignoreSuppressionOfPhpNotices;
    }

    public function ignoreSuppressionOfWarnings(): bool
    {
        return $this->ignoreSuppressionOfWarnings;
    }

    public function ignoreSuppressionOfPhpWarnings(): bool
    {
        return $this->ignoreSuppressionOfPhpWarnings;
    }
}
