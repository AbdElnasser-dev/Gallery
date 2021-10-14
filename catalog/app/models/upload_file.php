<?php 


class Upload_file{

	// public function upload($POST,$FILES){
	// 	$_SESSION['error'] = '';

	// 	$allowed[] = "image/jpeg"; 
	// 	$allowed[] = "video/mp4"; 
		
	// 	if($FILES['file']['name'] !="" && $FILES['file']['error']===0){
		
	// 			if(in_array($FILES['file']['type'], $allowed))
	// 			{

	// 			}
	// 			else{
	// 				$_SESSION['error'] ='Only JPEG File Is allowed';
	// 			}
	// 	}
	// 	if($_SESSION['error']===''){
	// 		$folder = "uploads/";
	// 		if(!file_exists($folder)){
	// 			mkdir($folder,0777,true);
	// 		}

	// 	$destination = $folder . $FILES['file']['name'];
	// 	move_uploaded_file($FILES['file']['tmp_name'], $destination);		
	// 	$arr['title'] = esc($POST['title']);
	// 	$arr['date'] = date("Y-m-d H:i:s");
	// 	$arr['url_address'] = get_random_string_max(60);
	// 	$arr['views'] = 0;
	// 	$arr['userid'] = 1;
	// 	$arr['image'] = $destination;

	// 	$DB = new Database();
	// 	$query = "INSERT INTO images(`userid`, `image`, `view`, `date`, `url_address`, `title`) VALUES(:userid,:image,:views,:date,:url_address,:title)";
	// 	$DB->write($query,$arr);
	// 	header("LOCATION" . ROOT . "photos");
	// 	die();
	// 	}
	// }
	public function upload($POST,$FILES)
	{

		$_SESSION['error'] = "";

		$allowed[] = 'image/jpeg';
		$allowed[] = 'video/mp4';
		if(isset($_POST['submit'])){

		//upload the file
		if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0)
		{

			if(in_array($FILES['file']['type'], $allowed))
			{

			}else{

				$_SESSION['error'] = "Only Jpegs are allowed!";
			}
		}

		if($_SESSION['error'] == "")
		{

			$folder = "uploads/";
			if(!file_exists($folder))
			{
				mkdir($folder,0777,true);
			}

			$destination = $folder . $FILES['file']['name'];

			move_uploaded_file($FILES['file']['tmp_name'], $destination);

			$arr['title'] = esc($POST['title']);
			$arr['date'] = date("Y-m-d H:i:s");
			$arr['user_url'] = 1;
			$arr['image'] = $destination;
			$arr['views'] = 0;
			$arr['url_address'] = get_random_string_max(60);

			$DB = new Database();
			$query = "insert into images (title,user_url,date,image,view,url_address) values (:title,:user_url,:date,:image,:views,:url_address)";
			$DB->write($query,$arr);

			header("Location: ". ROOT . "photos");
			die;
			
		}

	}
		}
}