<?php

class C_Tableau_de_bord extends CI_Controller {


		function __construct()
	{
			parent::__construct();
		if(!$this->session->userdata('admin'))
			redirect('C_Admin');
			
	}

/** =================================
 * 
 *             Global
 * 
 * =================================
 */

	    function index() {
	
        //variable
	    $data["title"] = "Tableau_de_bord";
          
		  
		  
		  		// navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;
		
	    //load
		$this->load->view('Layout', $data);  
	    $this->load->view('header', $data);
		$this->load->model('M_Tableau_de_bord');
        $this->load->model('M_Admin');
        $this->load->model('M_Message');
		$this->load->model('M_Projet');
		$this->load->model('M_Article');
    
		//data treatement projet
        $projects = $this->get_projects();
        // print_r($projects);
        $nb_projects = sizeof($projects);
		
		//data treatement veille
        $articles = $this->get_articles();
		// print_r($veille);
		$nb_articles = sizeof($articles);
        
		//data treatement competences
        $competences = $this->get_competences();
		// print_r($competence);
		$nb_competences = sizeof($competences);
		
		//data treatement messages
        $messages = $this->get_messages();
		// print_r($messages);
		$nb_messages = sizeof($messages);
        
		//data treatement categorie
        $categories = $this->get_categories();
		// print_r($categorie);
		$nb_categories = sizeof($categories);
		
		
		$data['messages'] = $messages;
		$data["nb_messages"] = $nb_messages;

		$data['competences'] = $competences;
		$data["nb_competences"] = $nb_competences;
		
        $data['categories'] = $categories;
		$data["nb_categories"] = $nb_categories;
		
        $data["articles"] = $articles;
        $data["nb_articles"] = $nb_articles;
		
        $data["projects"] = $projects;
        $data["nb_projects"] = $nb_projects;
			
        //export
        $this->load->view('V_Tableau_de_bord', $data);
		$this->load->view('footer');
        

		}

    /** =================================
     * 
     *            ADMIN
     * 
     * =================================
     */ 
	 public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    }

	 
	 
			function logout() {
				$this->session->sess_destroy();
				redirect('C_Admin');
			}



              //ajoute un admin a la bdd, via formulaire dans le tb
               public function add_admin() {
               $this->load->model('M_Admin');

               //test si les données ont été renseigné
               if(!empty($_POST)) {
		       $nom_Admin = $_POST["nom_Admin"];
		       $prenom_Admin = $_POST["prenom_Admin"];
               $login_Admin = $_POST["login_Admin"];
		       $motDePasse =  $_POST["motDePasse"];

               $nom_Admin = $this->input->post('nom_Admin');
               $prenom_Admin = $this->input->post('prenom_Admin');
               $login_Admin = $this->input->post('login_Admin');
               $motDePasse = $this->input->post('motDePasse');

	


               $this->M_Admin->set_admin($nom_Admin, $prenom_Admin, $login_Admin, $motDePasse);

               $base_url = base_url();
               header("location: ".$base_url."C_Tableau_de_bord");
               } else {
               return "Veuillez remplir les champs.";
                    }
               }
			   
	
    /** =================================
     * 
     *            CATEGORIE
     * 
     * =================================
     */
              //ajoute un admin a la bdd, via formulaire dans le tb
               public function add_categ() {
               $this->load->model('M_Article');

               //test si les données ont été renseigné
               if(!empty($_POST)) {
		       $libelle = $_POST["libelle"];

               $libelle = $this->input->post('libelle');
 
               $this->M_Article->set_categ($libelle);

               $base_url = base_url();
               header("location: ".$base_url."C_Tableau_de_bord");
               } else {
               return "Veuillez remplir les champs.";
                    }
               }
			   
			   	
    /** =================================
     * 
     *            COMPETENCES
     * 
     * =================================
	 
     */	   
			     //ajoute un admin a la bdd, via formulaire dans le tb
               public function add_comp() {
               $this->load->model('M_Projet');

               //test si les données ont été renseigné
               if(!empty($_POST)) {
		       $libelle_comp = $_POST["libelle_comp"];
			   $description = $_POST["description"];

               $libelle_comp = $this->input->post('libelle_comp');
			   $description = $this->input->post('description');

               $this->M_Projet->set_comp($libelle_comp, $description);

               $base_url = base_url();
               header("location: ".$base_url."C_Tableau_de_bord");
               } else {
               return "Veuillez remplir les champs.";
                    }
               }
			    
    /** =================================
     * 
     *            PROJET
     * 
     * =================================
     */
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

      

        //recupere tout les articles
        public function get_articles() {
        $articles = $this->M_Article->get_all_article();
        $res = array();
        for ($i = 0; $i < sizeof($articles); $i++) {
            $index = $i +1;
            $res["Article$index"] = $articles[$i];
        }
        
        return $res;
        
		}

       
		//recupere tout les categories
        public function get_categories() {
        $categories = $this->M_Article->get_all_categorie();
        $res = array();
        for ($i = 0; $i < sizeof($categories); $i++) {
            $index = $i +1;
            $res["Categorie$index"] = $categories[$i];
        }
        
        return $res;
        
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
		
 
		
	
	  //recupere tout les messages
        public function get_messages() {
        $messages = $this->M_Message->get_all_message();
        $res = array();
        for ($i = 0; $i < sizeof($messages); $i++) {
            $index = $i +1;
            $res["Message$index"] = $messages[$i];
        }
        
        return $res;
        
		}
		
		   //recupere un message par le biais de son id
        public function get_message_by_id($id_Message) {
        $project = $this->M_Message->get_message_by_id($id_Message);
        return $message;
    
	    }


	   //supprime un message de la bdd, acces a la fonction via formulaire
        public function sup_message() {
        $this->load->model('M_Message');

        //recuperation via la methode post
		$id_Message = $this->input->post('id_Message');

				foreach ($id_Message as $id_Message) 
        //test si le parametre est vide
        if ($id_Message != "") {
            $this->M_Message->delete_message($id_Message);
        } 
        
        //retour sur la page principale
        $base_url = base_url();
        header("location: ".$base_url."C_Tableau_de_bord");

        }



}
 
?>
