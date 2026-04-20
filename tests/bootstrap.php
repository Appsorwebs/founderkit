<?php
/**
 * Bootstrap for PHPUnit tests.
 *
 * @package FounderKit
 */

// Ensure WordPress test suite is loaded
if (!getenv('WP_TESTS_DIR')) {
    fwrite(STDERR, "WP_TESTS_DIR environment variable not set. Cannot run tests.\n");
    exit(1);
}

// Load WordPress test suite
require_once getenv('WP_TESTS_DIR') . '/includes/bootstrap.php';

// Include the plugin
require_once dirname(__DIR__) . '/founderkit/founderkit.php';

// Start the plugin
founderkit();
