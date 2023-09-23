<?php  

Class Contact extends Controller
{
	public function index()
	{
		$data['page_title'] = "Contact";
		/*$DB = new Database();

		if(isset($_POST['submit_form'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $msg = $_POST['message'];

            $query = "insert into form(name,email,message) values ($name,$email,$msg)";
            return $DB->read($query); 

            if($run){
            	echo "Form submitted successfully.";
            }else{
            	echo "Form not submitted";
            }
        }*/

		$this->view("showcase/contact",$data);
	}
		
}