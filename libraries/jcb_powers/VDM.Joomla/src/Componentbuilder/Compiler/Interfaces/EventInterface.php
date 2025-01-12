<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Componentbuilder\Compiler\Interfaces;


/**
 * Compiler Events Interface
 * 
 * @since 3.2.0
 */
interface EventInterface
{
	/**
	 * Trigger an event
	 *
	 * @param   string  $event  The event to trigger
	 * @param   mixed   $data   The values to pass to the event/plugin
	 *
	 * @return  void
	 * @since 3.2.0
	 */
	public function trigger(string $event, $data);
}

