<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Stub;

use PHPUnit\Framework\MockObject\Invocation;
use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception implements Stub
{
    /**
     * @readonly
     */
    private Throwable $exception;

    public function __construct(Throwable $exception)
    {
        $this->exception = $exception;
    }

    /**
     * @throws Throwable
     * @return never
     */
    public function invoke(Invocation $invocation)
    {
        throw $this->exception;
    }
}
