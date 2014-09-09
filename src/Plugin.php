<?php

namespace DavidRockin\PluginManager;

abstract class Plugin {

	final private $listeners = array();
	final private $pluginManager;
	
	public function __construct(PluginManager $pm) {
		$this->pluginManager = $pm;
	}
	
	public function onLoad() {
	}
	
	public function onUnload() {
	}
	
	public function onEnable();
	public function onDisable();
	
	final public registerListener($callback) {
		$this->listeners[] = $callback;
	}
	
	final public unregisterListener($callback) {
		// find listener, call cleanup(), remove from array
	}

	final public function cleanup() {
		foreach ($this->listeners as $listener) {
			$listener->unregisterListener($listener);
		}
	}
	
}

