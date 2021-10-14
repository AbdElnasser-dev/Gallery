<?php

class login extends Controller
	{
		public function index()
		{
			$data['page-title'] = "login";
				if (isset($_POST['email'])) {
				// code...
				$model = $this->loadModal("user");
				$model->signin($_POST);
			}
			$this->view('catalog/login',$data);


		}


	}