<?php

class C_Apropos extends CI_Controller {

		// $this->load->model('M_Navigation');
		public function index() {
        //VARIABLES
        $data['title'] = "Apropos";
        	
        // navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;

        //load
        $this->load->view('header', $data);
        $this->load->view('Layout', $data);
        
		//export
        $this->load->view('V_Apropos', $data);
        $this->load->view('footer');
		
		
		 //load language
        // $this->lang->load("hello", "francais");
        // $this->changeLang();
        if ($this->input->post("lang") !== null) {
            $lang = $this->input->post("lang");
        } else {
            $lang = "FR";
        }

        switch ($lang) {
            case "FR":
                $this->lang->load("hello", "francais");
            break;
            case "ENG":
                $this->lang->load("hello", "english");
            break;
            default :
                $this->lang->load("hello", "francais");
        break;

        
        }
      
        //data treatement	
        //lang
		$apropos = $this->lang->line('apropos');    
		$data['apropos'] = $apropos;

   }
   
    public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    }    
}