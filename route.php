<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];

	if(!empty($page)) {

		$data = array(
			'home' => array('model' => 'MainModel', 'view' => 'MainView', 'controller' => 'MainController'),
			'about' => array('model' => 'AboutModel', 'view' => 'AboutView', 'controller' => 'AboutController')
		);

		foreach ($data as $key => $components) {
			if($page == $key) {
				$routeModel = $components['model'];
				$routeView = $components['view'];
				$routeController = $components['controller'];
				break;
			}
		}
		if(!isset($routeModel)){
			$routeModel = "MainModel";
			$routeView = "MainView";
			$routeController = "MainController";
		}
	}
}