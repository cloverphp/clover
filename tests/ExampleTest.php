<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    private function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function testAddTwoNumbers(): void
    {
        $result = $this->add(2, 3);

        $this->assertEquals(5, $result, "2 + 3 should equal 5");
    }
}
