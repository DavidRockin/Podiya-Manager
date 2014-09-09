<?php

namespace DavidRockin\TestPlugin;

class TestListener extends \DavidRockin\PluginManager\Listener {

	public function __construct() {
		$this->registerEvent("text_format", array($this, "textFormatEvent"));
	}
	
	public function textFormatEvent(\DavidRockin\Podiya\Event $event) {
		return "<div class='fancy'>" . $event->getPreviousResult() . "</div>";
	}

}

