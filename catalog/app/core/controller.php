<?php

class Controller{
	public function view($view,$data=[]){
		if (file_exists('../app/view/' . $view . ".php")) {
				include "../app/view/" . $view . ".php";
		}
	}
	public function loadModal($model){
			if (file_exists('../app/models/' . strtolower($model) . ".php")) {
				include "../app/models/" . strtolower($model) . ".php";
				return $model = new $model();
		}
	}
}