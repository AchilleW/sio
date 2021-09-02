<?php

class C_Veille extends CI_Controller {

	// $this->load->model('M_Navigation');
	public function index() {
		
    //VARIABLES
    $data['title'] = "Veille technologique";
        		
    // navigation
    $this->load->model('M_Navigation');
    $nav = $this->get_nav();
    $data['nav'] = $nav;

    //load  
    $this->load->model('M_Article');
    $this->load->view('header', $data);
    $this->load->view('Layout', $data);
              
    //data treatement
    $articles = $this->get_articles();
	
    // print_r($articles);
    $nb_articles = sizeof($articles);

    $data["articles"] = $articles;
    $data["nb_articles"] = $nb_articles;
       
    //export
    $this->load->view('V_Veille', $data);
    $this->load->view('footer');
		
    }
	
	   /** =================================
     * 
     *             ARTICLE VEILLE
     * 
     * =================================
     */
	 
    public function get_nav() {
    $nav = $this->M_Navigation->get_nav();
    return $nav;
    
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

	//recupere un article par le biais de son id
    public function get_article_by_id($id) {
    $article = $this->M_Article->get_article_by_id($id);
    return $article;
    
	}
	
		//recupere une categorie par le biais de son id
    public function get_categorie_by_id($id_categ) {
    $categorie = $this->M_Article->get_categorie_by_id($id_categ);
    return $categorie;
    
	}

        //ajoute un article a la bdd, acces a la fonction via formulaire
        public function add_a_article() {
        $this->load->model('M_Article');

        //test si les données ont été renseigné
        if (isset($_POST['titre']) && isset($_POST['lien']) && isset($_POST['corp']) && isset($_POST['auteur'])&& isset($_POST['id_categ'])) {
            if (!empty($_POST['titre']) && !empty($_POST['lien']) && !empty($_POST['corp']) && isset($_POST['auteur'])&& isset($_POST['id_categ'])) {

                $titre = $this->input->post('titre');
                $lien = $this->input->post('lien');
				$corp = $this->input->post('corp');
				$auteur = $this->input->post('auteur');
		        $id_categ = $this->input->post('id_categ');


                $this->M_Article->add_article($titre, $lien, $corp, $auteur, $id_categ);
				
                $base_url = base_url();
                header("location: ".$base_url."C_Tableau_de_bord");
            } else {
                return "Veuillez remplir les champs.";
              }
            }
        }
    
        //supprime un article de la bdd, acces a la fonction via formulaire
        public function remove_a_article() {
        $this->load->model('M_Article');

        //recuperation via la methode post
        $id = $this->input->post('id');

        //test si le parametre est vide
        if ($id != "") {
            $this->M_Article->rm_article($id);
        } 
        
        //retour sur la page principale
        $base_url = base_url();
        header("location: ".$base_url."C_Tableau_de_bord");

        }

      
		  //change le titre de l'article
        public function change_titre() {
        $this->load->model('M_Article');

        if (isset($_POST['id']) && isset($_POST['new_titre'])) {
            if (!empty($_POST['id']) && isset($_POST['new_titre'])){
                $id = $this->input->post('id');
                $titre = $this->input->post('new_titre');
                
                $this->M_Article->set_titre($id, $titre);

                
            } else {
                return "Veuillez renseigner un auteur.";
            }
        }

        $base_url = base_url();
        header("location: ".$base_url."C_Tableau_de_bord");

        }
		

        //change le lien de l'article
        public function change_lien() {
        $this->load->model('M_Article');

        if (isset($_POST['id']) && isset($_POST['new_lien'])) {
            if (!empty($_POST['id']) && isset($_POST['new_lien'])){
                $id = $this->input->post('id');
                $lien = $this->input->post('new_lien');
                
                $this->M_Article->set_lien($id, $lien);

            } else {
                return "Veuillez renseigner un lien.";
            }
        }

        $base_url = base_url();
        header("location: ".$base_url."C_Tableau_de_bord");

        }
		
       //change le corp de l'article
        public function change_corp() {
        $this->load->model('M_Article');

        if (isset($_POST['id']) && isset($_POST['new_corp'])) {
            if (!empty($_POST['id']) && isset($_POST['new_corp'])){
                $id = $this->input->post('id');
                $corp = $this->input->post('new_corp');
                
                $this->M_Article->set_corp($id, $corp);
       
            } else {
                return "Veuillez renseigner un  corp.";
            }
        }

        $base_url = base_url();
        header("location: ".$base_url."C_Tableau_de_bord");

        }
		
		  //change l'auteur l'article
        public function change_auteur() {
        $this->load->model('M_Article');

        if (isset($_POST['id']) && isset($_POST['new_auteur'])) {
            if (!empty($_POST['id']) && isset($_POST['new_auteur'])){
                $id = $this->input->post('id');
                $auteur = $this->input->post('new_auteur');
                
                $this->M_Article->set_auteur($id, $auteur);

                
            } else {
                return "Veuillez renseigner un auteur.";
            }
        }

        $base_url = base_url();
        header("location: ".$base_url."C_Tableau_de_bord");

        }
		
		//recupere le titre d'un article
        public function recup_titre($id) {
        $this->load->model('M_Article');

        if (isset($_POST['id'])) {
            if (!empty($_POST['id'])){
                $id = $this->input->post('id');

                $titre = $this->M_Article->get_titre($id);
                
                $base_url = base_url();
                header("location: $base_url");
            } else {
                $titre = "Selectionnez un article.";
            }
        }

        return $titre;

        }
		

        //recupere le lien d'un article
        public function recup_lien($id) {
        $this->load->model('M_Article');

        if (isset($_POST['id'])) {
            if (!empty($_POST['id'])){
                $id = $this->input->post('id');

                $lien = $this->M_Article->get_lien($id);

                $base_url = base_url();
                header("location: $base_url");
            } else {
                $lien = "Selectionnez un article.";
            }
        }

        return $lien;

        }
		
	//recupere le corp d'un article
    public function recup_corp($id) {
    $this->load->model('M_Article');

        if (isset($_POST['id'])) {
            if (!empty($_POST['id'])){
                $id = $this->input->post('id');

                $corp = $this->M_Article->get_corp($id);
                
                $base_url = base_url();
                header("location: $base_url");
            } else {
                $corp = "Selectionnez un article.";
            }
        }

        return $corp;

        }

	//recupere l'auteur d'un article
    public function recup_auteur ($id) {
    $this->load->model('M_Article');

        if (isset($_POST['id'])) {
            if (!empty($_POST['id'])){
                $id = $this->input->post('id');

                $auteur = $this->M_Article->get_auteur($id);
                
                $base_url = base_url();
                header("location: $base_url");
            } else {
                $auteur = "Selectionnez un article.";
            }
        }

        return $auteur;

        }
	 
	 	//recupere la categorie d'un article
    public function recup_categorie ($id_categ) {
    $this->load->model('M_Article');

        if (isset($_POST['id_categ'])) {
            if (!empty($_POST['id_categ'])){
                $id_categ = $this->input->post('id_categ');

                $id_categ = $this->M_Article->get_categorie($id_categ);
                
                $base_url = base_url();
                header("location: $base_url");
            } else {
                $auteur = "Selectionnez une categorie.";
            }
        }

        return $auteur;

        }




}
?>