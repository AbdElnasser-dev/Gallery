<?php 

class logout extends Controller{
	public function index(){


			if(isset($_SESSION['user_url'])){

			unset($_SESSION['user_url']);
			}
			if (isset($_SESSION['user_email'])) {
				// code...
			unset($_SESSION['user_email']);
			}
		header("Location: " . ROOT . "photos");
		die();
	}
}