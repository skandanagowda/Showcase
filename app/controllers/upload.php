<?php

Class Upload extends Controller
{
	public function index()
	{
	// 	$data['page_title'] = "Photos";
	// 	$this->view("showcase/index",$data);
	}
	public function image()
	{
		$data['page_title'] = "Upload Image";
		$user = $this->loadModel("user");
		
		//check if logged in
		if(!$result = $user->is_looged_in())
		{
			header("Location: ". ROOT . "login");
			die;
		}

        if(isset($_FILES['file']))
        {
            $model = $this->loadModel("Upload_file");
			$model ->upload($_POST, $_FILES);
        }
		$this->view("showcase/upload_image",$data);
	}
	public function video()
	{
		$data['page_title'] = "Upload Video";
		$this->view("showcase/upload_video",$data);
	}
	
}