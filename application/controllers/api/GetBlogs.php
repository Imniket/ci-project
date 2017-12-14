<?php
	

	/**
	* 
	*/
	require(APPPATH . '/libraries/REST_Controller.php');
	class GetBlogs extends REST_Controller
	{
		
		function index()
		{
			//$blogid = $this->input->post(id);
			$blog = $this->Common_model->get_all_blog();

			if(!empty($blog)){
				$success = array('status' => 'success','errorcode'=>'1','data'=>$blog );
				echo json_encode($success);
				exit;
			}else{
				$success =array('status' => 'Failed', 'errorcode' => '0', 'msg' => 'No any blog found');
				echo json_encode($success);
				exit;
			}
			
		}
	}
?>