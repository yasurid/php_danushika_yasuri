<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->model('User_Model');  
    }


	public function index()
	{
        
        
        if($this->session->userdata('user')){
            redirect(Domain.'/index.php/Dashboard');
        }else{
            //$this->index();
           
            if($this->input->post()){
                
                
                $this->form_validation->set_rules('form[Username]', 'Username:', 'required|trim|xss_clean');  
                $this->form_validation->set_rules('form[Password]', 'Password:', 'required|trim'); 

                if ($this->form_validation->run() == TRUE){
                    $post = $this->input->post('form');
                  // print_r($post); //exit;
                    
                    //print_r($post['Username']); exit;
                        if($this->User_Model->login($post['Username'], $post['Password'])){
                            $user = $this->User_Model->get_user($post['Username'], $post['Password']);
                            //declaring session  
                           // print_r($user);
                            $this->session->set_userdata(array('user'=> $user));  
                            //$this->load->view('welcome_view');  
                        }else{
                          //  print_r("sssssss");
                        }
                
            
                           
                        
                         
                    }
            }
           // $this->load->view('index');
        }
        $this->load->view('index');
	}

   
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect('/');  
    }  

	

    
}
