<?php  

Class Videos extends Controller
{
	public function index()
	{
		$data['page_title'] = "Videos";
		$this->view("showcase/videos", $data);
	}
		
}