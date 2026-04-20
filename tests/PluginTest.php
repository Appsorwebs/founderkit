<?php
/**
 * Test for core plugin functionality.
 *
 * @package FounderKit
 */

use PHPUnit\Framework\TestCase;

class PluginTest extends TestCase {

    /** @test */
    public function it_loads_the_plugin() {
        $this->assertTrue(
            class_exists('FounderKit_Settings'),
            'FounderKit_Settings class should be available'
        );
    }

    /** @test */
    public function it_defines_constants() {
        $this->assertTrue(defined('FOUNDERKIT_VERSION'));
        $this->assertTrue(defined('FOUNDERKIT_PATH'));
        $this->assertTrue(defined('FOUNDERKIT_URL'));
    }

    /** @test */
    public function it_has_default_settings() {
        $defaults = FounderKit_Settings::defaults();
        $this->assertIsArray($defaults);
        $this->assertArrayHasKey('enabled_blocks', $defaults);
        $this->assertArrayHasKey('gsap_enabled', $defaults);
    }
}
