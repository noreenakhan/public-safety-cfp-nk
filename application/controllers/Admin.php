<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {
    
    
    public function __construct()
	{
		parent::__construct();
		
		if($this->session->userdata('IsSuperAdminLogin'))
		{
			$this->load->model('AdminModel','model');
		}
		else
		{	
			redirect(base_url());
		}
	} 
	
    //==========================================================================
    // Auth
    //==========================================================================
    
    public function login_user()
    {
        
    }
    
    public function logout_user()
    {
        
    }
    
    public function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
    
    //==========================================================================
    // dashboard
    //==========================================================================
    
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['page']  = 'dashboard';
        $this->load->view('template',$data);
    }
    
    //==========================================================================
    // respondents
    //==========================================================================
    
     public function respondents_view()
    {
        
    }
    
    //==========================================================================
    // district
    //==========================================================================
    
    public function districts_view()
    {
        
    }
    
    public function districts_add()
    {
        
    }
    
    //==========================================================================
    // user (including district-admin, it-staff)
    //==========================================================================
    
    public function users_view()
    {
    //     $data['title'] = 'IT Staff';
    // $data['page']  = 'admin/itstaff'; 
    // $data['itstaff'] = $this->model->iTList();
    // $this->load->view('template',$data);
    }
    
    public function user_add()
    {
        
        
        
        
    //====================================================
    // sadam code
    //====================================================
    
    //     $this->load->library('form_validation');
    // 	$this->form_validation->set_rules('username', 'Username', 'required|trim');
    //     $this->form_validation->set_rules('password', 'Password', 'required|trim');
    //     if ($this->form_validation->run() == FALSE)
    //     {
    //         $error = array('error' => validation_errors()); 
    //         $message= implode(" ",$error);
    //         $this->messages('alert-danger',$message);
    //         return redirect('admin/itstaff');
            
    //     }
    //     else
    //     {
    //     	$username = $this->input->post('username');
    //     	$password = $this->input->post('password');
    //     	$logincheck_data   = $this->model->logincheckByUsername($username);
        	
		  //      if(is_object($logincheck_data)) 
		  //      {
		  //      	$this->messages('alert-danger',"User Already Exists with this username");
		  //          return redirect('admin/itstaff');
		  //      }
		  //       else
		  //       {
		  //       	$array        = array('user_name'=>$username,'user_password'=>$password,'user_role_id_fk'=>2);
		  //          $insetCheck   = $this->model->insertRecord($array);
		  //          $this->messages('alert-success',"Add User Successfully");
		  //          return redirect('admin/itstaff');
		  //       }
        	
    //     }
    }
    
    public function user_edit()
    {
        
    }
    
    //==========================================================================
    // complaint
    //==========================================================================
    
    public function complaint_register()
    {
        
    }
    
    public function complaints_view()
    {
        
    }
    
    public function complaint_edit()
    {
        
    }
    
    public function complaint_feedback()
    {
        
    }

}

?>