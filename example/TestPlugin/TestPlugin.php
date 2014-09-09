<?php

class TestPlugin extends \DavidRockin\PluginManager\Plugin {

	public function onLoad() {
		// When the plugin gets loaded, we can load resources or stuff
	}
	
	public function onUnload() {
		// When the plugin gets unloaded, we can free sources
	}
	
	public function onEnable() {
		// We should only register listeners when we are enabled
		$this->pm->registerListener(new \DavidRockin\TestPlugin\TestListener());
	}

}

