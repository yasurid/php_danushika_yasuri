<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->model('Teammembers_Model','TeamMember');  
    }

	public function index()
	{
		//$all = '';
		$this->db->where('IsDeleted', '0');  
		
       
        $all = $this->db->get('member')->result(); 

		//print_r($all); exit;

		$data['all'] = $all;

		
		 
		//$all = $this->TeamMember->all();
		$this->load->view('list', $data);

	}

	public function get_one(){
		$data = $this->TeamMember->get_one($this->input->post('id'));
		//print_r($data);
		echo json_encode($data);
	}


	public function form(){
		
		$_id = $this->uri->segment('3');
		$data['one'] = $this->TeamMember->get_one_obj($_id);
		
		

		$post = $this->input->post('form');
		//print_r($post);
		if($this->input->post()){

		
		//validation
		$this->form_validation->set_rules('form[MemberName]', 'MemberName:', 'required|trim|xss_clean');  
       	$this->form_validation->set_rules('form[Email]', 'Email:', 'required|trim'); 
		$this->form_validation->set_rules('form[Phone]', 'Phone:', 'required|trim|min_length[10]|max_length[10]'); 
		$this->form_validation->set_rules('form[JoinedDate]', 'JoinedDate:', 'required|trim'); 
		$this->form_validation->set_rules('form[Role]', 'Role:', 'required|trim'); 
		//$this->form_validation->set_rules('Comment', 'Comment:', ''); 

        if ($this->form_validation->run() == TRUE){
			/*
				`MemberId` INT(11) NOT NULL AUTO_INCREMENT,
				`MemberName` VARCHAR(80) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
				`TeamId` INT(11) NULL DEFAULT NULL,
				`Email` VARCHAR(25) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
				`Phone` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
				`Joined Date` DATE NULL DEFAULT NULL,
				`Role` INT(11) NULL DEFAULT NULL,
				`Comment` TEXT NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
				`IsDeleted` INT(11) NULL DEFAULT '0',
			*/
			$post['TeamId'] = 1;
			//print_r($post); //exit();

			$this->db->trans_start();
			if($_id>0){
				$this->TeamMember->update($post,$_id);
				//print_r($this->db->last_query());
			}else{
				$this->TeamMember->add($post);
			}
			//$this->db->query('AN SQL QUERY...');
			//$this->db->query('ANOTHER QUERY...');
			$this->db->trans_complete();

			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();

				$this->session->set_userdata('form_return','<label>Please check and try again</labe>');

					// generate an error... or use the log_message() function to log your error
			}else{
				$this->db->trans_commit();
				$this->session->set_userdata('form_return','<label>Success</labe>');
			}


		}
	}
		//if form submit
		//if update or insert
		//print_r($data);

		$this->load->view('edit',$data);
		
	}

	public function delete($id){
		$_id = $_id = $this->uri->segment('3');
		$this->TeamMember->delete($_id);
		$this->session->set_userdata('form_return','<label>Success</labe>');
		redirect(Domain."index.php/Dashboard");
	}


	

    
}
