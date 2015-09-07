<?php

namespace controller;

require_once("Palette.php");
require_once("ColorPicker.php");


class SelectColor {
	/*
	* @var Palette model
	*/
	private $palette;

	/*
	* @var View view
	*/
	private $view;

	/**
	 * @param ModelSessionColorPersistor $persistance [description]
	 */
	public function __construct(\model\SessionColorPersistor $persistance) {
		$this->palette = new \model\Palette(10, $persistance, 0.0);
		$this->view = new \view\ColorPicker($this->palette);
	}


	/**
	* @return String [HTML]
	*/
	public function doSelectColor() {

		if ($this->view->userHasSelectedColor() ) {
			try {
				$color = $this->view->getSelectedColor();
				$this->palette->setSelectedColor($color);
			} catch (\Exception $e) {
				$this->view->showErrorMessage();
			}
		} 

		return $this->view->getHTML();
	}
}


