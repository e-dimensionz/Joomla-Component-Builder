<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    3rd September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Componentbuilder\Search;


use VDM\Joomla\Componentbuilder\Search\Factory;
use VDM\Joomla\Componentbuilder\Search\Config;


/**
 * Search Table
 * 
 * @since 3.2.0
 */
class Table
{
	/**
	 * All areas/views/tables with their field details to SEARCH
	 *
	 * @var     array
	 * @since 3.2.0
	 **/
	protected $tables = [
		'joomla_component' => [
			'system_name' => [
				'name' => 'system_name',
				'type' => 'text',
				'title' => true,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'name_code' => [
				'name' => 'name_code',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'short_description' => [
				'name' => 'short_description',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'companyname' => [
				'name' => 'companyname',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_helper_both' => [
				'name' => 'php_helper_both',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Libs & Helpers',
			],
			'crowdin_project_identifier' => [
				'name' => 'crowdin_project_identifier',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Dynamic Integration',
			],
			'php_method_uninstall' => [
				'name' => 'php_method_uninstall',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Dash & Install',
			],
			'php_preflight_install' => [
				'name' => 'php_preflight_install',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Dash & Install',
			],
			'css_admin' => [
				'name' => 'css_admin',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Libs & Helpers',
			],
			'php_admin_event' => [
				'name' => 'php_admin_event',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Libs & Helpers',
			],
			'php_site_event' => [
				'name' => 'php_site_event',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Libs & Helpers',
			],
			'description' => [
				'name' => 'description',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'author' => [
				'name' => 'author',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_postflight_install' => [
				'name' => 'php_postflight_install',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Dash & Install',
			],
			'email' => [
				'name' => 'email',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'sql_uninstall' => [
				'name' => 'sql_uninstall',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'MySQL',
			],
			'website' => [
				'name' => 'website',
				'type' => 'url',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_helper_admin' => [
				'name' => 'php_helper_admin',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Libs & Helpers',
			],
			'whmcs_key' => [
				'name' => 'whmcs_key',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
			],
			'php_helper_site' => [
				'name' => 'php_helper_site',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Libs & Helpers',
			],
			'whmcs_url' => [
				'name' => 'whmcs_url',
				'type' => 'url',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'javascript' => [
				'name' => 'javascript',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Libs & Helpers',
			],
			'whmcs_buy_link' => [
				'name' => 'whmcs_buy_link',
				'type' => 'url',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'css_site' => [
				'name' => 'css_site',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Libs & Helpers',
			],
			'license' => [
				'name' => 'license',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_preflight_update' => [
				'name' => 'php_preflight_update',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Dash & Install',
			],
			'php_postflight_update' => [
				'name' => 'php_postflight_update',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Dash & Install',
			],
			'copyright' => [
				'name' => 'copyright',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'sql' => [
				'name' => 'sql',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'MySQL',
			],
			'update_server_url' => [
				'name' => 'update_server_url',
				'type' => 'url',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Dynamic Integration',
			],
			'component_version' => [
				'name' => 'component_version',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'crowdin_username' => [
				'name' => 'crowdin_username',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'basic_encryption',
				'tab_name' => 'Dynamic Integration',
			],
			'buildcompsql' => [
				'name' => 'buildcompsql',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Dynamic Build (beta)',
			],
			'menu_prefix' => [
				'name' => 'menu_prefix',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Settings',
			],
			'toignore' => [
				'name' => 'toignore',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Settings',
			],
			'export_key' => [
				'name' => 'export_key',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'basic_encryption',
				'tab_name' => 'Settings',
			],
			'joomla_source_link' => [
				'name' => 'joomla_source_link',
				'type' => 'url',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Settings',
			],
			'export_buy_link' => [
				'name' => 'export_buy_link',
				'type' => 'url',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Settings',
			],
			'addcontributors' => [
				'name' => 'addcontributors',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'json',
				'tab_name' => 'Settings',
			],
			'readme' => [
				'name' => 'readme',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'base64',
				'tab_name' => 'Readme',
			],
			'crowdin_project_api_key' => [
				'name' => 'crowdin_project_api_key',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'basic_encryption',
				'tab_name' => 'Dynamic Integration',
			],
			'crowdin_account_api_key' => [
				'name' => 'crowdin_account_api_key',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => 'basic_encryption',
				'tab_name' => 'Dynamic Integration',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_components',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'joomla_module' => [
			'system_name' => [
				'name' => 'system_name',
				'type' => 'text',
				'title' => true,
				'list' => 'joomla_modules',
				'store' => NULL,
				'tab_name' => 'HTML',
			],
			'description' => [
				'name' => 'description',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => NULL,
				'tab_name' => 'HTML',
			],
			'default' => [
				'name' => 'default',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'HTML',
			],
			'module_version' => [
				'name' => 'module_version',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => NULL,
				'tab_name' => 'HTML',
			],
			'php_preflight_update' => [
				'name' => 'php_preflight_update',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'php_preflight_uninstall' => [
				'name' => 'php_preflight_uninstall',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'mod_code' => [
				'name' => 'mod_code',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Code',
			],
			'php_postflight_install' => [
				'name' => 'php_postflight_install',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'php_postflight_update' => [
				'name' => 'php_postflight_update',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'php_method_uninstall' => [
				'name' => 'php_method_uninstall',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'class_helper_header' => [
				'name' => 'class_helper_header',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Helper',
			],
			'sql' => [
				'name' => 'sql',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'MySQL',
			],
			'class_helper_code' => [
				'name' => 'class_helper_code',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Helper',
			],
			'sql_uninstall' => [
				'name' => 'sql_uninstall',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'MySQL',
			],
			'fields' => [
				'name' => 'fields',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'json',
				'tab_name' => 'Forms & Fields',
			],
			'readme' => [
				'name' => 'readme',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Readme',
			],
			'update_server_url' => [
				'name' => 'update_server_url',
				'type' => 'url',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => NULL,
				'tab_name' => 'Dynamic Integration',
			],
			'php_script_construct' => [
				'name' => 'php_script_construct',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'php_preflight_install' => [
				'name' => 'php_preflight_install',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_modules',
				'store' => NULL,
				'tab_name' => 'HTML',
			],
		],
		'joomla_plugin' => [
			'system_name' => [
				'name' => 'system_name',
				'type' => 'text',
				'title' => true,
				'list' => 'joomla_plugins',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'method_selection' => [
				'name' => 'method_selection',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'json',
				'tab_name' => 'Code',
			],
			'property_selection' => [
				'name' => 'property_selection',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'json',
				'tab_name' => 'Code',
			],
			'head' => [
				'name' => 'head',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Code',
			],
			'main_class_code' => [
				'name' => 'main_class_code',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Code',
			],
			'description' => [
				'name' => 'description',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'php_postflight_install' => [
				'name' => 'php_postflight_install',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'plugin_version' => [
				'name' => 'plugin_version',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'php_postflight_update' => [
				'name' => 'php_postflight_update',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'fields' => [
				'name' => 'fields',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'json',
				'tab_name' => 'Forms & Fields',
			],
			'php_method_uninstall' => [
				'name' => 'php_method_uninstall',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'sql' => [
				'name' => 'sql',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'MySQL',
			],
			'php_script_construct' => [
				'name' => 'php_script_construct',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'sql_uninstall' => [
				'name' => 'sql_uninstall',
				'type' => 'textarea',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'MySQL',
			],
			'readme' => [
				'name' => 'readme',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Readme',
			],
			'php_preflight_install' => [
				'name' => 'php_preflight_install',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'update_server_url' => [
				'name' => 'update_server_url',
				'type' => 'url',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => NULL,
				'tab_name' => 'Dynamic Integration',
			],
			'php_preflight_update' => [
				'name' => 'php_preflight_update',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'php_preflight_uninstall' => [
				'name' => 'php_preflight_uninstall',
				'type' => 'editor',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => 'base64',
				'tab_name' => 'Script File',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => false,
				'list' => 'joomla_plugins',
				'store' => NULL,
				'tab_name' => 'Code',
			],
		],
		'power' => [
			'system_name' => [
				'name' => 'system_name',
				'type' => 'text',
				'title' => true,
				'list' => 'powers',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'namespace' => [
				'name' => 'namespace',
				'type' => 'text',
				'title' => false,
				'list' => 'powers',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'power_version' => [
				'name' => 'power_version',
				'type' => 'text',
				'title' => false,
				'list' => 'powers',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'load_selection' => [
				'name' => 'load_selection',
				'type' => 'subform',
				'title' => false,
				'list' => 'powers',
				'store' => 'json',
				'tab_name' => 'Code',
			],
			'main_class_code' => [
				'name' => 'main_class_code',
				'type' => 'editor',
				'title' => false,
				'list' => 'powers',
				'store' => 'base64',
				'tab_name' => 'Code',
			],
			'description' => [
				'name' => 'description',
				'type' => 'textarea',
				'title' => false,
				'list' => 'powers',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'licensing_template' => [
				'name' => 'licensing_template',
				'type' => 'textarea',
				'title' => false,
				'list' => 'powers',
				'store' => 'base64',
				'tab_name' => 'Licensing',
			],
			'property_selection' => [
				'name' => 'property_selection',
				'type' => 'subform',
				'title' => false,
				'list' => 'powers',
				'store' => 'json',
				'tab_name' => 'Code',
			],
			'implements_custom' => [
				'name' => 'implements_custom',
				'type' => 'text',
				'title' => false,
				'list' => 'powers',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'extends_custom' => [
				'name' => 'extends_custom',
				'type' => 'text',
				'title' => false,
				'list' => 'powers',
				'store' => NULL,
				'tab_name' => 'Code',
			],
			'method_selection' => [
				'name' => 'method_selection',
				'type' => 'subform',
				'title' => false,
				'list' => 'powers',
				'store' => 'json',
				'tab_name' => 'Code',
			],
			'head' => [
				'name' => 'head',
				'type' => 'editor',
				'title' => false,
				'list' => 'powers',
				'store' => 'base64',
				'tab_name' => 'Code',
			],
			'use_selection' => [
				'name' => 'use_selection',
				'type' => 'subform',
				'title' => false,
				'list' => 'powers',
				'store' => 'json',
				'tab_name' => 'Code',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'powers',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => false,
				'list' => 'powers',
				'store' => NULL,
				'tab_name' => 'Code',
			],
		],
		'admin_view' => [
			'system_name' => [
				'name' => 'system_name',
				'type' => 'text',
				'title' => false,
				'list' => 'admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'name_single' => [
				'name' => 'name_single',
				'type' => 'text',
				'title' => false,
				'list' => 'admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'short_description' => [
				'name' => 'short_description',
				'type' => 'text',
				'title' => false,
				'list' => 'admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_allowedit' => [
				'name' => 'php_allowedit',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_postsavehook' => [
				'name' => 'php_postsavehook',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_before_save' => [
				'name' => 'php_before_save',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_getlistquery' => [
				'name' => 'php_getlistquery',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_import_ext' => [
				'name' => 'php_import_ext',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Import',
			],
			'php_after_publish' => [
				'name' => 'php_after_publish',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'description' => [
				'name' => 'description',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_after_cancel' => [
				'name' => 'php_after_cancel',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_batchmove' => [
				'name' => 'php_batchmove',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_after_delete' => [
				'name' => 'php_after_delete',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_import' => [
				'name' => 'php_import',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Import',
			],
			'addpermissions' => [
				'name' => 'addpermissions',
				'type' => 'subform',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'json',
				'tab_name' => 'Settings',
			],
			'php_getitems_after_all' => [
				'name' => 'php_getitems_after_all',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_getform' => [
				'name' => 'php_getform',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'addtabs' => [
				'name' => 'addtabs',
				'type' => 'subform',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'json',
				'tab_name' => 'Settings',
			],
			'php_save' => [
				'name' => 'php_save',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_allowadd' => [
				'name' => 'php_allowadd',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_before_cancel' => [
				'name' => 'php_before_cancel',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'addlinked_views' => [
				'name' => 'addlinked_views',
				'type' => 'subform',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'json',
				'tab_name' => 'Settings',
			],
			'php_batchcopy' => [
				'name' => 'php_batchcopy',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_before_publish' => [
				'name' => 'php_before_publish',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_before_delete' => [
				'name' => 'php_before_delete',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_document' => [
				'name' => 'php_document',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'sql' => [
				'name' => 'sql',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'MySQL',
			],
			'php_import_display' => [
				'name' => 'php_import_display',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Import',
			],
			'php_import_setdata' => [
				'name' => 'php_import_setdata',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Import',
			],
			'name_list' => [
				'name' => 'name_list',
				'type' => 'text',
				'title' => false,
				'list' => 'admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'css_view' => [
				'name' => 'css_view',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'CSS',
			],
			'css_views' => [
				'name' => 'css_views',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'CSS',
			],
			'javascript_view_file' => [
				'name' => 'javascript_view_file',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript',
			],
			'javascript_view_footer' => [
				'name' => 'javascript_view_footer',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript',
			],
			'javascript_views_file' => [
				'name' => 'javascript_views_file',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript',
			],
			'javascript_views_footer' => [
				'name' => 'javascript_views_footer',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript',
			],
			'custom_button' => [
				'name' => 'custom_button',
				'type' => 'subform',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'json',
				'tab_name' => 'Custom Buttons',
			],
			'php_controller' => [
				'name' => 'php_controller',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Buttons',
			],
			'php_model' => [
				'name' => 'php_model',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Buttons',
			],
			'php_controller_list' => [
				'name' => 'php_controller_list',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Buttons',
			],
			'php_model_list' => [
				'name' => 'php_model_list',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Buttons',
			],
			'addtables' => [
				'name' => 'addtables',
				'type' => 'subform',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'json',
				'tab_name' => 'MySQL',
			],
			'php_ajaxmethod' => [
				'name' => 'php_ajaxmethod',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'ajax_input' => [
				'name' => 'ajax_input',
				'type' => 'subform',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'json',
				'tab_name' => 'PHP',
			],
			'html_import_view' => [
				'name' => 'html_import_view',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Import',
			],
			'php_getitem' => [
				'name' => 'php_getitem',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_import_headers' => [
				'name' => 'php_import_headers',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Import',
			],
			'php_import_save' => [
				'name' => 'php_import_save',
				'type' => 'textarea',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Import',
			],
			'php_getitems' => [
				'name' => 'php_getitems',
				'type' => 'editor',
				'title' => false,
				'list' => 'admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'admin_views',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
		],
		'custom_admin_view' => [
			'system_name' => [
				'name' => 'system_name',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'custom_admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'description' => [
				'name' => 'description',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'css_document' => [
				'name' => 'css_document',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript & CSS',
			],
			'css' => [
				'name' => 'css',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript & CSS',
			],
			'js_document' => [
				'name' => 'js_document',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript & CSS',
			],
			'javascript_file' => [
				'name' => 'javascript_file',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript & CSS',
			],
			'codename' => [
				'name' => 'codename',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'default' => [
				'name' => 'default',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'context' => [
				'name' => 'context',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_ajaxmethod' => [
				'name' => 'php_ajaxmethod',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'ajax_input' => [
				'name' => 'ajax_input',
				'type' => 'subform',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'json',
				'tab_name' => 'PHP',
			],
			'php_document' => [
				'name' => 'php_document',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_view' => [
				'name' => 'php_view',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_jview_display' => [
				'name' => 'php_jview_display',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'custom_button' => [
				'name' => 'custom_button',
				'type' => 'subform',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'json',
				'tab_name' => 'Custom Buttons',
			],
			'php_jview' => [
				'name' => 'php_jview',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_controller' => [
				'name' => 'php_controller',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Buttons',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'php_model' => [
				'name' => 'php_model',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_admin_views',
				'store' => 'base64',
				'tab_name' => 'Custom Buttons',
			],
		],
		'site_view' => [
			'system_name' => [
				'name' => 'system_name',
				'type' => 'text',
				'title' => false,
				'list' => 'site_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'site_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'description' => [
				'name' => 'description',
				'type' => 'text',
				'title' => false,
				'list' => 'site_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'js_document' => [
				'name' => 'js_document',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript & CSS',
			],
			'codename' => [
				'name' => 'codename',
				'type' => 'text',
				'title' => false,
				'list' => 'site_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'javascript_file' => [
				'name' => 'javascript_file',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript & CSS',
			],
			'context' => [
				'name' => 'context',
				'type' => 'text',
				'title' => false,
				'list' => 'site_views',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'default' => [
				'name' => 'default',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'css_document' => [
				'name' => 'css_document',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript & CSS',
			],
			'css' => [
				'name' => 'css',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'JavaScript & CSS',
			],
			'php_ajaxmethod' => [
				'name' => 'php_ajaxmethod',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'ajax_input' => [
				'name' => 'ajax_input',
				'type' => 'subform',
				'title' => false,
				'list' => 'site_views',
				'store' => 'json',
				'tab_name' => 'PHP',
			],
			'php_document' => [
				'name' => 'php_document',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_view' => [
				'name' => 'php_view',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_jview_display' => [
				'name' => 'php_jview_display',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'custom_button' => [
				'name' => 'custom_button',
				'type' => 'subform',
				'title' => false,
				'list' => 'site_views',
				'store' => 'json',
				'tab_name' => 'Custom Buttons',
			],
			'php_jview' => [
				'name' => 'php_jview',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'PHP',
			],
			'php_controller' => [
				'name' => 'php_controller',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'Custom Buttons',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'site_views',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'php_model' => [
				'name' => 'php_model',
				'type' => 'editor',
				'title' => false,
				'list' => 'site_views',
				'store' => 'base64',
				'tab_name' => 'Custom Buttons',
			],
		],
		'template' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'templates',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'description' => [
				'name' => 'description',
				'type' => 'text',
				'title' => false,
				'list' => 'templates',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_view' => [
				'name' => 'php_view',
				'type' => 'editor',
				'title' => false,
				'list' => 'templates',
				'store' => 'base64',
				'tab_name' => 'Custom Script',
			],
			'template' => [
				'name' => 'template',
				'type' => 'editor',
				'title' => false,
				'list' => 'templates',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'alias' => [
				'name' => 'alias',
				'type' => 'text',
				'title' => false,
				'list' => 'templates',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'layout' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'layouts',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'description' => [
				'name' => 'description',
				'type' => 'text',
				'title' => false,
				'list' => 'layouts',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'php_view' => [
				'name' => 'php_view',
				'type' => 'editor',
				'title' => false,
				'list' => 'layouts',
				'store' => 'base64',
				'tab_name' => 'Custom Script',
			],
			'layout' => [
				'name' => 'layout',
				'type' => 'editor',
				'title' => false,
				'list' => 'layouts',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'alias' => [
				'name' => 'alias',
				'type' => 'text',
				'title' => false,
				'list' => 'layouts',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'dynamic_get' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'dynamic_gets',
				'store' => NULL,
				'tab_name' => 'Main',
			],
			'php_router_parse' => [
				'name' => 'php_router_parse',
				'type' => 'textarea',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'base64',
				'tab_name' => 'Custom Script',
			],
			'php_before_getitems' => [
				'name' => 'php_before_getitems',
				'type' => 'editor',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'base64',
				'tab_name' => 'Custom Script',
			],
			'php_after_getitems' => [
				'name' => 'php_after_getitems',
				'type' => 'editor',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'base64',
				'tab_name' => 'Custom Script',
			],
			'php_after_getitem' => [
				'name' => 'php_after_getitem',
				'type' => 'editor',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'base64',
				'tab_name' => 'Custom Script',
			],
			'php_getlistquery' => [
				'name' => 'php_getlistquery',
				'type' => 'editor',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'base64',
				'tab_name' => 'Custom Script',
			],
			'join_db_table' => [
				'name' => 'join_db_table',
				'type' => 'subform',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'json',
				'tab_name' => 'Joint',
			],
			'view_selection' => [
				'name' => 'view_selection',
				'type' => 'textarea',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => NULL,
				'tab_name' => 'Main',
			],
			'php_custom_get' => [
				'name' => 'php_custom_get',
				'type' => 'editor',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'base64',
				'tab_name' => 'Main',
			],
			'db_selection' => [
				'name' => 'db_selection',
				'type' => 'textarea',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => NULL,
				'tab_name' => 'Main',
			],
			'php_calculation' => [
				'name' => 'php_calculation',
				'type' => 'editor',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'base64',
				'tab_name' => 'Abacus',
			],
			'php_before_getitem' => [
				'name' => 'php_before_getitem',
				'type' => 'editor',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'base64',
				'tab_name' => 'Custom Script',
			],
			'getcustom' => [
				'name' => 'getcustom',
				'type' => 'text',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => NULL,
				'tab_name' => 'Main',
			],
			'filter' => [
				'name' => 'filter',
				'type' => 'subform',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'json',
				'tab_name' => 'Tweak',
			],
			'where' => [
				'name' => 'where',
				'type' => 'subform',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'json',
				'tab_name' => 'Tweak',
			],
			'order' => [
				'name' => 'order',
				'type' => 'subform',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'json',
				'tab_name' => 'Tweak',
			],
			'group' => [
				'name' => 'group',
				'type' => 'subform',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'json',
				'tab_name' => 'Tweak',
			],
			'global' => [
				'name' => 'global',
				'type' => 'subform',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'json',
				'tab_name' => 'Tweak',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'join_view_table' => [
				'name' => 'join_view_table',
				'type' => 'subform',
				'title' => false,
				'list' => 'dynamic_gets',
				'store' => 'json',
				'tab_name' => 'Joint',
			],
		],
		'custom_code' => [
			'path' => [
				'name' => 'path',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_codes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'function_name' => [
				'name' => 'function_name',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_codes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'system_name' => [
				'name' => 'system_name',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_codes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'code' => [
				'name' => 'code',
				'type' => 'editor',
				'title' => false,
				'list' => 'custom_codes',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'hashendtarget' => [
				'name' => 'hashendtarget',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_codes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'to_line' => [
				'name' => 'to_line',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_codes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'from_line' => [
				'name' => 'from_line',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_codes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'hashtarget' => [
				'name' => 'hashtarget',
				'type' => 'text',
				'title' => false,
				'list' => 'custom_codes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'class_property' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'class_properties',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'class_properties',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'comment' => [
				'name' => 'comment',
				'type' => 'textarea',
				'title' => false,
				'list' => 'class_properties',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'default' => [
				'name' => 'default',
				'type' => 'textarea',
				'title' => false,
				'list' => 'class_properties',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
		],
		'class_method' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'class_methods',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'class_methods',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'code' => [
				'name' => 'code',
				'type' => 'editor',
				'title' => false,
				'list' => 'class_methods',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'comment' => [
				'name' => 'comment',
				'type' => 'textarea',
				'title' => false,
				'list' => 'class_methods',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'arguments' => [
				'name' => 'arguments',
				'type' => 'text',
				'title' => false,
				'list' => 'class_methods',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
		],
		'placeholder' => [
			'target' => [
				'name' => 'target',
				'type' => 'text',
				'title' => true,
				'list' => 'placeholders',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'value' => [
				'name' => 'value',
				'type' => 'text',
				'title' => false,
				'list' => 'placeholders',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
		],
		'library' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'libraries',
				'store' => NULL,
				'tab_name' => 'Behaviour',
			],
			'description' => [
				'name' => 'description',
				'type' => 'text',
				'title' => false,
				'list' => 'libraries',
				'store' => NULL,
				'tab_name' => 'Behaviour',
			],
			'php_setdocument' => [
				'name' => 'php_setdocument',
				'type' => 'textarea',
				'title' => false,
				'list' => 'libraries',
				'store' => 'base64',
				'tab_name' => 'Behaviour',
			],
			'addconditions' => [
				'name' => 'addconditions',
				'type' => 'subform',
				'title' => false,
				'list' => 'libraries',
				'store' => 'json',
				'tab_name' => 'Behaviour',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'libraries',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
		],
		'snippet' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'url' => [
				'name' => 'url',
				'type' => 'url',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'heading' => [
				'name' => 'heading',
				'type' => 'text',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
			'contributor_email' => [
				'name' => 'contributor_email',
				'type' => 'text',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Contributor',
			],
			'contributor_name' => [
				'name' => 'contributor_name',
				'type' => 'text',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Contributor',
			],
			'contributor_website' => [
				'name' => 'contributor_website',
				'type' => 'text',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Contributor',
			],
			'contributor_company' => [
				'name' => 'contributor_company',
				'type' => 'text',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Contributor',
			],
			'snippet' => [
				'name' => 'snippet',
				'type' => 'textarea',
				'title' => false,
				'list' => 'snippets',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'usage' => [
				'name' => 'usage',
				'type' => 'textarea',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'description' => [
				'name' => 'description',
				'type' => 'textarea',
				'title' => false,
				'list' => 'snippets',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'validation_rule' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'validation_rules',
				'store' => NULL,
				'tab_name' => 'Extends FormRule',
			],
			'short_description' => [
				'name' => 'short_description',
				'type' => 'text',
				'title' => false,
				'list' => 'validation_rules',
				'store' => NULL,
				'tab_name' => 'Extends FormRule',
			],
			'php' => [
				'name' => 'php',
				'type' => 'textarea',
				'title' => false,
				'list' => 'validation_rules',
				'store' => 'base64',
				'tab_name' => 'Extends FormRule',
			],
		],
		'field' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'fields',
				'store' => NULL,
				'tab_name' => 'Set Properties',
			],
			'on_get_model_field' => [
				'name' => 'on_get_model_field',
				'type' => 'textarea',
				'title' => false,
				'list' => 'fields',
				'store' => 'base64',
				'tab_name' => 'Database',
			],
			'on_save_model_field' => [
				'name' => 'on_save_model_field',
				'type' => 'textarea',
				'title' => false,
				'list' => 'fields',
				'store' => 'base64',
				'tab_name' => 'Database',
			],
			'initiator_on_get_model' => [
				'name' => 'initiator_on_get_model',
				'type' => 'textarea',
				'title' => false,
				'list' => 'fields',
				'store' => 'base64',
				'tab_name' => 'Database',
			],
			'css_view' => [
				'name' => 'css_view',
				'type' => 'editor',
				'title' => false,
				'list' => 'fields',
				'store' => 'base64',
				'tab_name' => 'Scripts',
			],
			'javascript_view_footer' => [
				'name' => 'javascript_view_footer',
				'type' => 'editor',
				'title' => false,
				'list' => 'fields',
				'store' => 'base64',
				'tab_name' => 'Scripts',
			],
			'css_views' => [
				'name' => 'css_views',
				'type' => 'editor',
				'title' => false,
				'list' => 'fields',
				'store' => 'base64',
				'tab_name' => 'Scripts',
			],
			'datadefault_other' => [
				'name' => 'datadefault_other',
				'type' => 'text',
				'title' => false,
				'list' => 'fields',
				'store' => NULL,
				'tab_name' => 'Database',
			],
			'datalenght_other' => [
				'name' => 'datalenght_other',
				'type' => 'text',
				'title' => false,
				'list' => 'fields',
				'store' => NULL,
				'tab_name' => 'Database',
			],
			'javascript_views_footer' => [
				'name' => 'javascript_views_footer',
				'type' => 'editor',
				'title' => false,
				'list' => 'fields',
				'store' => 'base64',
				'tab_name' => 'Scripts',
			],
			'initiator_on_save_model' => [
				'name' => 'initiator_on_save_model',
				'type' => 'textarea',
				'title' => false,
				'list' => 'fields',
				'store' => 'base64',
				'tab_name' => 'Database',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'fields',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
		],
		'fieldtype' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'fieldtypes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'datadefault_other' => [
				'name' => 'datadefault_other',
				'type' => 'text',
				'title' => false,
				'list' => 'fieldtypes',
				'store' => NULL,
				'tab_name' => 'Database (defaults)',
			],
			'datalenght_other' => [
				'name' => 'datalenght_other',
				'type' => 'text',
				'title' => false,
				'list' => 'fieldtypes',
				'store' => NULL,
				'tab_name' => 'Database (defaults)',
			],
			'short_description' => [
				'name' => 'short_description',
				'type' => 'text',
				'title' => false,
				'list' => 'fieldtypes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'properties' => [
				'name' => 'properties',
				'type' => 'subform',
				'title' => false,
				'list' => 'fieldtypes',
				'store' => 'json',
				'tab_name' => 'Details',
			],
			'description' => [
				'name' => 'description',
				'type' => 'textarea',
				'title' => false,
				'list' => 'fieldtypes',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'guid' => [
				'name' => 'guid',
				'type' => 'text',
				'title' => false,
				'list' => 'fieldtypes',
				'store' => NULL,
				'tab_name' => 'publishing',
			],
		],
		'language_translation' => [
			'source' => [
				'name' => 'source',
				'type' => 'textarea',
				'title' => true,
				'list' => 'language_translations',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'translation' => [
				'name' => 'translation',
				'type' => 'subform',
				'title' => false,
				'list' => 'language_translations',
				'store' => 'json',
				'tab_name' => 'Details',
			],
		],
		'language' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'languages',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'langtag' => [
				'name' => 'langtag',
				'type' => 'text',
				'title' => false,
				'list' => 'languages',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'server' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'servers',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'signature' => [
				'name' => 'signature',
				'type' => 'text',
				'title' => false,
				'list' => 'servers',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
			],
			'private_key' => [
				'name' => 'private_key',
				'type' => 'textarea',
				'title' => false,
				'list' => 'servers',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
			],
			'private' => [
				'name' => 'private',
				'type' => 'text',
				'title' => false,
				'list' => 'servers',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
			],
			'path' => [
				'name' => 'path',
				'type' => 'text',
				'title' => false,
				'list' => 'servers',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
			],
			'port' => [
				'name' => 'port',
				'type' => 'text',
				'title' => false,
				'list' => 'servers',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
			],
			'host' => [
				'name' => 'host',
				'type' => 'text',
				'title' => false,
				'list' => 'servers',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
			],
			'username' => [
				'name' => 'username',
				'type' => 'text',
				'title' => false,
				'list' => 'servers',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
			],
		],
		'help_document' => [
			'title' => [
				'name' => 'title',
				'type' => 'text',
				'title' => true,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'content' => [
				'name' => 'content',
				'type' => 'editor',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'url' => [
				'name' => 'url',
				'type' => 'url',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'alias' => [
				'name' => 'alias',
				'type' => 'text',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'admin_fields' => [
			'addfields' => [
				'name' => 'addfields',
				'type' => 'subform',
				'title' => false,
				'list' => 'admins_fields',
				'store' => 'json',
				'tab_name' => 'Fields',
			],
		],
		'admin_fields_conditions' => [
			'addconditions' => [
				'name' => 'addconditions',
				'type' => 'subform',
				'title' => false,
				'list' => 'admins_fields_conditions',
				'store' => 'json',
				'tab_name' => 'Conditions',
			],
		],
		'admin_fields_relations' => [
			'addrelations' => [
				'name' => 'addrelations',
				'type' => 'subform',
				'title' => false,
				'list' => 'admins_fields_relations',
				'store' => 'json',
				'tab_name' => 'Relations',
			],
		],
		'admin_custom_tabs' => [
			'tabs' => [
				'name' => 'tabs',
				'type' => 'subform',
				'title' => false,
				'list' => 'admins_custom_tabs',
				'store' => 'json',
				'tab_name' => 'Tabs',
			],
		],
		'component_admin_views' => [
			'addadmin_views' => [
				'name' => 'addadmin_views',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_admin_views',
				'store' => 'json',
				'tab_name' => 'Views',
			],
		],
		'component_site_views' => [
			'addsite_views' => [
				'name' => 'addsite_views',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_site_views',
				'store' => 'json',
				'tab_name' => 'Views',
			],
		],
		'component_custom_admin_views' => [
			'addcustom_admin_views' => [
				'name' => 'addcustom_admin_views',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_custom_admin_views',
				'store' => 'json',
				'tab_name' => 'Views',
			],
		],
		'component_updates' => [
			'version_update' => [
				'name' => 'version_update',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_updates',
				'store' => 'json',
				'tab_name' => 'Updates',
			],
		],
		'component_mysql_tweaks' => [
			'sql_tweak' => [
				'name' => 'sql_tweak',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_mysql_tweaks',
				'store' => 'json',
				'tab_name' => 'Mysql Tweaks',
			],
		],
		'component_custom_admin_menus' => [
			'addcustommenus' => [
				'name' => 'addcustommenus',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_custom_admin_menus',
				'store' => 'json',
				'tab_name' => 'Menus',
			],
		],
		'component_config' => [
			'addconfig' => [
				'name' => 'addconfig',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_config',
				'store' => 'json',
				'tab_name' => 'Options',
			],
		],
		'component_dashboard' => [
			'dashboard_tab' => [
				'name' => 'dashboard_tab',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_dashboard',
				'store' => 'json',
				'tab_name' => 'Dashboard',
			],
			'php_dashboard_methods' => [
				'name' => 'php_dashboard_methods',
				'type' => 'textarea',
				'title' => false,
				'list' => 'components_dashboard',
				'store' => 'base64',
				'tab_name' => 'Dashboard',
			],
		],
		'component_files_folders' => [
			'addfoldersfullpath' => [
				'name' => 'addfoldersfullpath',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_files_folders',
				'store' => 'json',
				'tab_name' => 'Advance',
			],
			'addfilesfullpath' => [
				'name' => 'addfilesfullpath',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_files_folders',
				'store' => 'json',
				'tab_name' => 'Advance',
			],
			'addfolders' => [
				'name' => 'addfolders',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_files_folders',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
			'addfiles' => [
				'name' => 'addfiles',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_files_folders',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
		],
		'component_placeholders' => [
			'addplaceholders' => [
				'name' => 'addplaceholders',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_placeholders',
				'store' => 'json',
				'tab_name' => 'Details',
			],
		],
		'component_plugins' => [
			'addjoomla_plugins' => [
				'name' => 'addjoomla_plugins',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_plugins',
				'store' => 'json',
				'tab_name' => 'Plugins',
			],
		],
		'component_modules' => [
			'addjoomla_modules' => [
				'name' => 'addjoomla_modules',
				'type' => 'subform',
				'title' => false,
				'list' => 'components_modules',
				'store' => 'json',
				'tab_name' => 'Modules',
			],
		],
		'snippet_type' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'snippet_types',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'description' => [
				'name' => 'description',
				'type' => 'text',
				'title' => false,
				'list' => 'snippet_types',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'library_config' => [
			'addconfig' => [
				'name' => 'addconfig',
				'type' => 'subform',
				'title' => false,
				'list' => 'libraries_config',
				'store' => 'json',
				'tab_name' => 'Tweaks',
			],
		],
		'library_files_folders_urls' => [
			'addfoldersfullpath' => [
				'name' => 'addfoldersfullpath',
				'type' => 'subform',
				'title' => false,
				'list' => 'libraries_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Advance',
			],
			'addfilesfullpath' => [
				'name' => 'addfilesfullpath',
				'type' => 'subform',
				'title' => false,
				'list' => 'libraries_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Advance',
			],
			'addfolders' => [
				'name' => 'addfolders',
				'type' => 'subform',
				'title' => false,
				'list' => 'libraries_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
			'addfiles' => [
				'name' => 'addfiles',
				'type' => 'subform',
				'title' => false,
				'list' => 'libraries_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
			'addurls' => [
				'name' => 'addurls',
				'type' => 'subform',
				'title' => false,
				'list' => 'libraries_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
		],
		'class_extends' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'class_extendings',
				'store' => NULL,
				'tab_name' => 'Details',
			],
			'head' => [
				'name' => 'head',
				'type' => 'editor',
				'title' => false,
				'list' => 'class_extendings',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
			'comment' => [
				'name' => 'comment',
				'type' => 'textarea',
				'title' => false,
				'list' => 'class_extendings',
				'store' => 'base64',
				'tab_name' => 'Details',
			],
		],
		'joomla_module_updates' => [
			'version_update' => [
				'name' => 'version_update',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_modules_updates',
				'store' => 'json',
				'tab_name' => 'Updates',
			],
		],
		'joomla_module_files_folders_urls' => [
			'addfoldersfullpath' => [
				'name' => 'addfoldersfullpath',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_modules_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Advance',
			],
			'addfilesfullpath' => [
				'name' => 'addfilesfullpath',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_modules_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Advance',
			],
			'addfolders' => [
				'name' => 'addfolders',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_modules_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
			'addfiles' => [
				'name' => 'addfiles',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_modules_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
			'addurls' => [
				'name' => 'addurls',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_modules_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
		],
		'joomla_plugin_group' => [
			'name' => [
				'name' => 'name',
				'type' => 'text',
				'title' => true,
				'list' => 'joomla_plugin_groups',
				'store' => NULL,
				'tab_name' => 'Details',
			],
		],
		'joomla_plugin_updates' => [
			'version_update' => [
				'name' => 'version_update',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins_updates',
				'store' => 'json',
				'tab_name' => 'Updates',
			],
		],
		'joomla_plugin_files_folders_urls' => [
			'addfoldersfullpath' => [
				'name' => 'addfoldersfullpath',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Advance',
			],
			'addfilesfullpath' => [
				'name' => 'addfilesfullpath',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Advance',
			],
			'addfolders' => [
				'name' => 'addfolders',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
			'addfiles' => [
				'name' => 'addfiles',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
			'addurls' => [
				'name' => 'addurls',
				'type' => 'subform',
				'title' => false,
				'list' => 'joomla_plugins_files_folders_urls',
				'store' => 'json',
				'tab_name' => 'Basic',
			],
		],
	];

	/**
	 * Search Config
	 *
	 * @var    Config
	 * @since 3.2.0
	 */
	protected Config $config;

	/**
	 * Constructor
	 *
	 * @param Config|null    $config           The search config object.
	 *
	 * @since 3.2.0
	 */
	public function __construct(?Config $config = null)
	{
		$this->config = $config ?: Factory::_('Config');
	}

	/**
	 * Get any value from a item/field/column of an area/view/table
	 *          Example: $this->get('table_name', 'field_name', 'value_key');
	 * Get an item/field/column of an area/view/table
	 *          Example: $this->get('table_name', 'field_name');
	 * Get all items/fields/columns of an area/view/table
	 *          Example: $this->get('table_name');
	 * Get all areas/views/tables with all their item/field/column details
	 *          Example: $this->get();
	 *
	 * @param   string|null  $table  The table
	 * @param   string|null  $field  The field
	 * @param   string|null  $key    The value key
	 *
	 * @return  mixed
	 * @since 3.2.0
	 */
	public function get(?string $table = null, ?string $field = null, ?string $key = null)
	{
		// load the table
		if (empty($table) && is_string($field))
		{
			$table = $this->config->table_name;
		}

		// return the item/field/column of an area/view/table 
		if (is_string($field) && is_string($key))
		{
			// return the value of a item/field/column of an area/view/table 
			if (isset($this->tables[$table][$field][$key]))
			{
				return $this->tables[$table][$field][$key];
			}
			return null;
		}
		// return the item/field/column of an area/view/table 
		elseif (is_string($field))
		{
			if (isset($this->tables[$table][$field]))
			{
				return $this->tables[$table][$field];
			}
			return null;
		}
		// return an area/view/table
		elseif (is_string($table))
		{
			if (isset($this->tables[$table]))
			{
				return $this->tables[$table];
			}
			return null;
		}

		// return all
		return $this->tables;
	}

	/**
	 * Get title field from an area/view/table
	 *
	 * @param   string|null  $table  The area
	 *
	 * @return  ?array
	 * @since 3.2.0
	 */
	public function title(?string $table = null): ?array
	{
		// load the table
		if (empty($table))
		{
			$table = $this->config->table_name;
		}

		// return the title item/field/column of an area/view/table 
		if (($table = $this->get($table)) !== null)
		{
			foreach ($table as $item)
			{
				if ($item['title'])
				{
					return $item;
				}
			}
		}

		// none found
		return null;
	}

	/**
	 * Get title field name
	 *
	 * @param   string|null  $table  The area
	 *
	 * @return  string
	 * @since 3.2.0
	 */
	public function titleName(?string $table = null): string
	{
		// load the table
		if (empty($table))
		{
			$table = $this->config->table_name;
		}

		// return the title name of an area/view/table 
		if (($field = $this->title($table)) !== null)
		{
			return $field['name'];
		}

		// none found default to ID
		return 'id';
	}

	/**
	 * Get all tables
	 *
	 * @return  array
	 * @since 3.2.0
	 */
	public function tables(): array
	{
		// return all areas/views/tables
		return array_keys($this->tables);
	}

	/**
	 * Check if a table (and field) exist
	 *
	 * @param   string|null  $table  The area
	 * @param   string|null  $field  The area
	 *
	 * @return  bool
	 * @since 3.2.0
	 */
	public function exist(?string $table = null, ?string $field = null): bool
	{
		// load the table
		if (empty($table))
		{
			$table = $this->config->table_name;
		}

		if (is_string($table) && isset($this->tables[$table]))
		{
			// if we have a field
			if (is_string($field))
			{
				if (isset($this->tables[$table][$field]))
				{
					return true;
				}
			}
			else
			{
				return true;
			}
		}

		return false;
	}

	/**
	 * Get all fields of an area/view/table
	 *
	 * @param   string|null  $table  The area
	 *
	 * @return  ?array
	 * @since 3.2.0
	 */
	public function fields(?string $table = null): ?array
	{
		// load the table
		if (empty($table))
		{
			$table = $this->config->table_name;
		}

		// return all fields of an area/view/table
		if (($table = $this->get($table)) !== null)
		{
			return array_keys($table);
		}

		// none found
		return null;
	}

}
