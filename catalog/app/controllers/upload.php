<?php

class Upload extends Controller
	{
		public function index()
		{

		}
		public function image()
		{

			$data['page-title'] = "Upload Image";
			$user = $this->loadModal("user");
			if(!$result = $user->is_logged_in()){
				header("Location:" . ROOT . "login");
				die();
			}
			if (isset($_FILES)) {
				// code...
				$model = $this->loadModal("upload_file");
				$model->upload($_POST,$_FILES);
				// show($_POST);
				// show($_FILES);
			}

			$this->view('catalog/upload_image',$data);
		}
		public function video()
		{
			$data['page-title'] = "Upload Video";
			$this->view('catalog/upload_video',$data);
		}

	}