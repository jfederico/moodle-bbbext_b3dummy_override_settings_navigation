<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Callback implementations for BigBlueButton BN Reports
 *
 * @package   bbbext_b3dummy_override_settings_navigation
 * @copyright 2025 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */

defined('MOODLE_INTERNAL') || die;

use mod_bigbluebuttonbn\instance;

/**
 * Adds module specific settings to the settings block
 *
 * @param settings_navigation $settingsnav The settings navigation object
 * @param navigation_node $nodenav The node to add module settings to
 */
function b3dummy_override_settings_navigation_override_extend_settings_navigation(settings_navigation $settingsnav, navigation_node $nodenav) {
    // Get Course Module.
    $cm = $settingsnav->get_page()->cm;

    // Add completion link customized.
    $completionvalidate = '#action=completion_validate&bigbluebuttonbn=' . $cm->instance;
    $nodenav->add(get_string('completionvalidatestate', 'bigbluebuttonbn') . ' customized by override',
        $completionvalidate, navigation_node::TYPE_CONTAINER
    );
}
