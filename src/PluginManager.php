<?php

namespace DavidRockin\PluginManager;
use DavidRockin\Podiya\Podiya,
	DavidRockin\Podiya\Event;

class PluginManager {

	/**
	 * An array that contains discovered plugins
	 */
	private $plugins = array();
	
	/**
	 * An array that contains loaded plugins
	 */
	private $loadedPlugins = array();
	
	private $podiya;
	
	public function __construct() {
		$this->podiya = new Podiya();
	}
	
	/**
	 * Loads an existing plugin
	 */
	public function loadPlugin($pluginName) {
	}
	
	/**
	 * Unloads a loaded plugin
	 */
	public function unloadPlugin($pluginName) {
	}
	
	/**
	 * Enable a loaded plugin, allow it to extend base functionality
	 */
	public function enablePlugin($pluginName) {
	}
	
	/**
	 * Disable a loaded plugin
	 */
	public function disablePlugin($pluginName) {
	}

}

