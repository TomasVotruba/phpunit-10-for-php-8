--TEST--
\PHPUnit\Framework\MockObject\Generator\Generator::generate('Bar', [], 'MockBar', true, true)
--FILE--
<?php declare(strict_types=1);
abstract class Foo
{
    abstract public function baz();
}

class Bar extends Foo
{
    public function baz(): parent
    {
    }
}

require_once __DIR__ . '/../../../bootstrap.php';

$generator = new \PHPUnit\Framework\MockObject\Generator\Generator;

$mock = $generator->generate(
    'Bar',
    true,
    [],
    'MockBar',
    true,
    true
);

print $mock->classCode();
--EXPECTF--
declare(strict_types=1);

class MockBar extends Bar implements PHPUnit\Framework\MockObject\MockObjectInternal
{
    use PHPUnit\Framework\MockObject\StubApi;
    use PHPUnit\Framework\MockObject\MockObjectApi;
    use PHPUnit\Framework\MockObject\Method;
    use PHPUnit\Framework\MockObject\DoubledCloneMethod;

    public function baz(): Foo
    {
        $__phpunit_arguments = [];
        $__phpunit_count     = func_num_args();

        if ($__phpunit_count > 0) {
            $__phpunit_arguments_tmp = func_get_args();

            for ($__phpunit_i = 0; $__phpunit_i < $__phpunit_count; $__phpunit_i++) {
                $__phpunit_arguments[] = $__phpunit_arguments_tmp[$__phpunit_i];
            }
        }

        $__phpunit_result = $this->__phpunit_getInvocationHandler()->invoke(
            new \PHPUnit\Framework\MockObject\Invocation(
                'Bar', 'baz', $__phpunit_arguments, 'Foo', $this, true
            )
        );

        return $__phpunit_result;
    }
}
