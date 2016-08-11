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
 * Package settings. This settings will be used among all SAMIE package plugins
 *
 * @package    SAMIE
 * @copyright  2015 Planificacion de Entornos Tecnologicos SL
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    global $CFG;
    global $DB;
    $settings = new admin_settingpage('local_samieconfig', new lang_string('pluginname', 'local_samieconfig'));
    $ADMIN->add('localplugins', $settings);

    $settings->add(new admin_setting_heading('local_samieconfig_commonsettings',
            get_string('settingsheadercommon', 'local_samieconfig'), ''));

    $settings->add(new admin_setting_configtext('package_samie/baseurl', get_string('baseurl', 'local_samieconfig'), '', ''));

    $settings->add(new admin_setting_heading('local_samieconfig_settings', '', ''));

    $settings->add(new admin_setting_heading('local_samieconfig_exdbheader', get_string('settingsheaderdb', 'local_samieconfig'),
            ''));

    $settings->add(new admin_setting_configtext('package_samie/dbhost', get_string('dbhost', 'local_samieconfig'),
            get_string('dbhost_desc', 'local_samieconfig'), ''));

    $settings->add(new admin_setting_configtext('package_samie/dbuser',
            get_string('dbuser', 'local_samieconfig'), '', ''));

    $settings->add(new admin_setting_configpasswordunmask('package_samie/dbpass',
            get_string('dbpass', 'local_samieconfig'), '', ''));

    $settings->add(new admin_setting_configtext('package_samie/dbname',
            get_string('dbname', 'local_samieconfig'), get_string('dbname_desc', 'local_samieconfig'), ''));

    $settings->add(new admin_setting_heading('local_samieconfig_newcoursesheader',
            get_string('settingsheadernewcourses', 'local_samieconfig'), ''));

    $settings->add(new admin_setting_configselect('package_samie/professionalcertificatecategory',
            get_string('professionalcertificatecategory', 'local_samieconfig'),
            get_string('professionalcertificatecategory_desc', 'local_samieconfig'), 1, make_categories_options()));
}