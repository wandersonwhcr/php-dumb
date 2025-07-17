<?php

declare(strict_types=1);

namespace DumbTest;

use Dumb\Dumb;
use PHPUnit\Framework\TestCase;

/**
 * DumbTest
 */
class DumbTest extends TestCase
{
    private Dumb $dumb;

    protected function setUp(): void
    {
        $this->dumb = new Dumb();
    }

    public function testDumb(): void
    {
        $this->assertTrue($this->dumb->isTrue());
    }
}
