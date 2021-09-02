<?php

class C_Admin extends CI_Controller {

	public function index() {
				
        //VARIABLES
        $data['title'] = "Espace Admin";
        		
        // navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;

	

        //load
        $this->load->model('M_Admin');
		$this->load->model('M_Message');
        $this->load->view('header', $data);
        $this->load->view('Layout', $data);
		      
        //export
        $this->load->view('V_Admin', $data);
        $this->load->view('footer');
   }
   
		function verify() {
		
		$this->load->model('M_Admin');
		$check = $this->M_Admin->validate();
		if($check)
		{
			$this->session->set_userdata('admin','1');
			redirect('C_Tableau_de_bord');
		}
		else
		{
	
			redirect('C_Admin');
		}
	}

		
	public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    }
	
	  
}

?>