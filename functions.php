<?php
/**
 * functions.php
 *
 * functions.php is the first theme code WP runs, we have split this file into
 * our lib directory to prevent kitchen sinkery.
 *
 * @package Offset\Supports
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 *
 */
/**
 * Required WP Setup
 */
locate_template('core/define.php',     true, true); // Define settings
locate_template('core/supports.php',   true, true); // Set theme supports
locate_template('core/menus.php',      true, true); // Set up menus
locate_template('core/cleanup.php',    true, true); // Cleanups and tweaks to WP
