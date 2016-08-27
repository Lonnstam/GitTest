<?php
namespace Controllers;

class MainController
{
	private $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function clicked() {
        $this->model->string = "Woooo";
    }
}