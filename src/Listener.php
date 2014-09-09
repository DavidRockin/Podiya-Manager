<?php

namespace DavidRockin\PluginManager;

abstract class Listener {

	final private $events = array();
	
	final public function registerEvent($eventName, $callback, $priority, $cancellable) {
	}
	
	final public function unregisterEvent($eventName, $callback) {
	}
	
	/**
	 * Called when the plugin has to disable/unload
	 */
	final public function cleanup() {
		foreach ($this->events as $eventName => $callback) {
			$this->unregisterEvent($eventName, $callback);
		}
	}
	
}

