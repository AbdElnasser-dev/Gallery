<?php

class Home extends Controller
	{
		public function index()
		{
			$data['page-title'] = "Home";


			$load_class = $this->loadModal("load_images");
			$pag = $this->loadModal("pagination");
			$data['page_next'] = $pag->generate_link($pag->current_page_number() + 1);
			$data['page_prev'] = $pag->generate_link($pag->current_page_number() - 1); 
			$data['page_1'] = $pag->generate_link(1); 
			$data['page_2'] = $pag->generate_link($pag->current_page_number() + 1); 
			$data['page_3'] = $pag->generate_link($pag->current_page_number() + 2); 
			$data['page_4'] = $pag->generate_link($pag->current_page_number() + 3); 
			$data['page_current'] = $pag->current_page_number(); 

			$find = isset($_GET['find'])?$_GET['find']:"";


			$data['images'] = $load_class->get_images($find);

			$data['page_total'] = $load_class->get_total(); 

			$image_class = $this->loadModal("image_class");
			$data['page_total'] = $load_class->get_total(); 

			if (is_array($data['images'])) {
				// code...
			foreach($data['images'] as $key => $row){

				$data['images'][$key]->image = $image_class->get_thumbnail($row->image);

				}
			}
			$this->view('catalog/index',$data);
		}

	}