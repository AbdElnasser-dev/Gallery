<?php

class About extends Controller
	{
		public function index()
		{
			$data['page-title'] = "About";
			$this->view('catalog/about',$data);
		}

	}