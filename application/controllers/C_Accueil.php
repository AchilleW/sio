<?php

class C_Accueil extends CI_Controller {

        public function index() {
        //VARIABLES
        $data['title'] = "Accueil";

        // navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;

        //load
        $this->load->model('M_Accueil');
        $this->load->view('header', $data);
        $this->load->view('Layout', $data);
		
		
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
        $hi_msg = $this->lang->line('hello');
        $desc = $this->lang->line('desc');
        $data['hi_msg'] = $hi_msg;
        $data['desc'] = $desc;


        //nom
        $content = $this->get_content();
        $nom = $content[0]->nom;
        $data["nom"] = $nom;


		//export
        $this->load->view('V_Accueil', $data);
        $this->load->view('footer');
    }

    public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    }

    public function get_content() {
        $content = $this->M_Accueil->get_content();
        return $content;
    }

   


    
}