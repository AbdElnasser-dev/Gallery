<?php

class photo_detail extends Controller
	{
		public function index($url_address='')
		{
			$data['page-title'] = "Photo_details";

			$load_class = $this->loadModal("load_images");

			$data['image']=$load_class->get_single_image($url_address);
			$data['random_images']=$load_class->get_images();
			$image_class = $this->loadModal("image_class");
			
			if (is_array($data['random_images'])) {
				// code...
			foreach($data['random_images'] as $key => $row){

				$data['random_images'][$key]->image = $image_class->get_thumbnail($row->image);

				}
			}

			$this->view('catalog/photo_detail',$data);
		}

	}