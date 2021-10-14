<?php

class signup extends Controller
	{
		public function index()
		{
			$data['page-title'] = "signup";
				if (isset($_POST['email'])) {
				// code...
				$model = $this->loadModal("user");
				$model->signup($_POST);
			}
			$this->view('catalog/signup',$data);


		}


	}