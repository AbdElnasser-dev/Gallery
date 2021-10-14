<?php

class Videos extends Controller
	{
		public function index()
		{
			$data['page-title'] = "vidoes";
			$this->view('catalog/videos',$data);
		}

	}