<?php
/**
* 
*/

require(APPPATH . '/libraries/REST_Controller.php');
class GetUsers extends REST_Controller
{
	
	function index()
	{
		$usersid = $this->input->post('id');
		$users = $this->Common_model->get_usersby_id($usersid);

		if (!empty($users)) {
			$success = array('status'=> 'success', 'errorcode'=> '1', 'data' => $users);
			echo json_encode($success);
			exit;
			}else{
				$success = array('status' => 'Failed', 'errorcode' => '0' ,'msg' => 'No such users Found');
				echo json_encode($success);
				exit;
			}
	}
}
?>