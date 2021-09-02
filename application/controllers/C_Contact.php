<?php
 
class C_Contact extends CI_Controller {	


		// $this->load->model('M_Navigation');
	    public function index() {
	    //VARIABLES
	    $data["title"] = "Mon Contact";     
	    
		
	    // navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;

		
		//load
	    $this->load->model('M_Message');
		$this->load->view('header', $data); 
		$this->load->view('Layout', $data);  
		
		//data treatement
        $objets = $this->get_objet();
        // print_r($projects);
        $nb_objets = sizeof($objets);

        $data["objets"] = $objets;
        $data["nb_objets"] = $nb_objets;
					
		
        //export
        $this->load->view('V_Message', $data);
        $this->load->view('footer');
		
	
    
        }
		
  public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    }

    public function recup_articles() {
        $articles = $this->M_Article->get_articles();
        return $articles;
    }
	
		   
		       //ajoute un message a la bdd,  via formulaire
               public function add_message() {
               $this->load->model('M_Message');

               //test si les données ont été renseigné
               if(!empty($_POST)) {
		       $nom_Message = $_POST["nom_Message"];
		       $prenom_Message = $_POST["prenom_Message"];
		       $mail_Message = $_POST["mail_Message"];
               $id_objet = $this->input->post('id_objet');
		       $contenu_Message = $_POST["contenu_Message"];

               $nom_Message = $this->input->post('nom_Message');
               $prenom_Message = $this->input->post('prenom_Message');
               $mail_Message = $this->input->post('mail_Message');
               $id_objet = $this->input->post('id_objet');
               $contenu_Message = $this->input->post('contenu_Message');
	


               $this->M_Message->set_message($nom_Message, $prenom_Message, $mail_Message, $id_objet, $contenu_Message);

               $base_url = base_url();
               header("location: ".$base_url."C_Accueil");
               } else {
               return "Veuillez remplir les champs.";
                    }
               }
			   
			   

     	//recupere tout les objets
        public function get_objet() {
        $objets = $this->M_Message->get_all_objet();
        $res = array();
        for ($i = 0; $i < sizeof($objets); $i++) {
            $index = $i +1;
            $res["Objet$index"] = $objets[$i];
        }
        
        return $res;
        
		}   
		
 
			   
     /** =================================
     * 
     *             GETTERS
     * 
     * =================================
	 
	 
	 		
	
     /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */
      
}   
  
?>
