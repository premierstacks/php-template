<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use Premierstacks\PhpTemplate\Main;

/**
 * @internal
 */
#[Small]
#[CoversClass(Main::class)]
class MainTest extends TestCase
{
    #[Test]
    #[DoesNotPerformAssertions]
    public function testMain(): void
    {
        Main::main();
    }
}
