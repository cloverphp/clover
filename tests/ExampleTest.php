<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    private function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function test_add_two_numbers(): void
    {
        $result = $this->add(2, 3);

        $this->assertEquals(5, $result, '2 + 3 should equal 5');
    }
}
