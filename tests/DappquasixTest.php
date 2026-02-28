<?php
/**
 * Tests for DAppQuasix
 */

use PHPUnit\Framework\TestCase;
use Dappquasix\Dappquasix;

class DappquasixTest extends TestCase {
    private Dappquasix $instance;

    protected function setUp(): void {
        $this->instance = new Dappquasix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dappquasix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
