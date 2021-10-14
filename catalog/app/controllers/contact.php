<?php

class Contact extends Controller
	{
		public function index()
		{
			$data['page-title'] = "Contact";
			$this->view('catalog/contact',$data);
		}

	}