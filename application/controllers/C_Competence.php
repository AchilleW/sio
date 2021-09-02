<?php

class C_Competence extends CI_Controller {

        public function index() {
        //variables
        $data['title'] = "Mes Competences";
				
        //navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;

        //load
        $this->load->model('M_Projet');
        $this->load->view('header', $data);
        $this->load->view('Layout', $data);
		   		
        //data treatement
        $projects = $this->get_projects();
        // print_r($projects);
        $nb_projects = sizeof($projects);

		//data treatement competences
        $competences = $this->get_competences();
		// print_r($competence);
		$nb_competences = sizeof($competences);
		
        $data["projects"] = $projects;
        $data["nb_projects"] = $nb_projects;
		
		$data['competences'] = $competences;
		$data["nb_competences"] = $nb_competences;			
		
        //export
        $this->load->view('V_Competence', $data);
        $this->load->view('footer');
		
		}
		
		//navigation
		public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    	        
		}

    	//recupere tout les competences
        public function get_competences() {
        $competences = $this->M_Projet->get_all_competence();
        $res = array();
        for ($i = 0; $i < sizeof($competences); $i++) {
            $index = $i +1;
            $res["Competence$index"] = $competences[$i];
        }
        
        return $res;
        
		}   
		//recupere tout les projets
        public function get_projects() {
        $projects = $this->M_Projet->get_all_project();
        $res = array();
        for ($i = 0; $i < sizeof($projects); $i++) {
            $index = $i +1;
            $res["Project$index"] = $projects[$i];
        }
        
        return $res;
        
		}
		
		//recupere tout les projets
        public function check_competence() {

        
		}
}
?>