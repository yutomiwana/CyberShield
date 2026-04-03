<?php
/**
 * Tests for CyberShieldLab
 */

use PHPUnit\Framework\TestCase;
use Cybershieldlab\Cybershieldlab;

class CybershieldlabTest extends TestCase {
    private Cybershieldlab $instance;

    protected function setUp(): void {
        $this->instance = new Cybershieldlab(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cybershieldlab::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
