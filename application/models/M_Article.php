<?php

class M_Article extends CI_Model {

    public $id;
    public $titre;
    public $lien;
    public $corp;
    public $date_publication;
    public $auteur;
	public $id_categ;

    /** =================================
     * 
     *             Global
     * 
     * =================================
     */
	 
    //ajoute une categ
	public function set_categ($libelle) {
    $this->load->database();
       
		$data = array(
            'libelle'=> $libelle,
	

        );
		    $this->db->insert('pfc_categorie', $data);

    }
   

	//renvois tout les categories
    public function get_all_categorie() {
    $this->load->database();
	
    $query = $this->db->get('pfc_categorie');
    return $query->result();
	
    }

    // recupere une categorie d'article via son id
    public function get_categorie_by_id($id_categ) {
    $this->load->database();
	
    $query = $this->db->query("SELECT libelle FROM pfc_article WHERE id_categ = $id_categ");
    return $query->result();
	
    }
	
	//renvois tout les articles 
    public function get_all_article() {
    $this->load->database();
	
    $query = $this->db->get('pfc_article');
    return $query->result();
	
    }
	
	
	  // recupere un article via son id
    public function get_article_by_id($id) {
    $this->load->database();
	
    $query = $this->db->query("SELECT titre, lien, corp, date_publication, auteur FROM pfc_article WHERE id = $id");
    return $query->result();
	
    }

   
    // Ajoute un article dans la base
    public function add_article($titre, $lien, $corp, $auteur, $id_categ) {
    $this->load->database();
    $now = date("Y-m-d H:i:s");
		
        $data = array(
            'titre' => $titre,
            'lien' => $lien,
			'corp' => $corp,
            'date_publication' => $now,
            'auteur' => $auteur,
			'id_categ' =>$id_categ
        );

    $this->db->insert('pfc_article', $data);

    }


    //supprime un article
    public function rm_article($id) {
    $this->load->database();

    $query = "DELETE FROM pfc_article WHERE id = ?";
    $this->db->query($query, array($id));

    }


    /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */

    public function set_titre($id, $titre) {
    $this->load->database();

    $query = "UPDATE pfc_article SET titre = ? WHERE id = ?";
    $this->db->query($query, array($titre, $id));

    }

    public function set_lien($id, $lien) {
    $this->load->database();

    $query = "UPDATE pfc_article SET lien = ? WHERE id = ?";
    $this->db->query($query, array($lien, $id));

    }

    public function set_corp($id, $corp) {
    $this->load->database();

    $query = "UPDATE pfc_article SET corp = ? WHERE id = ?";
    $this->db->query($query, array($corp, $id));

    }

    public function set_auteur($id, $auteur) {
    $this->load->database();

    $query = "UPDATE pfc_article SET auteur = ? WHERE id = ?";
    $this->db->query($query, array($auteur, $id));

    }
    

    /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */

    public function get_titre($id) {
    $this->load->database();

    $query = "SELECT titre FROM pfc_article WHERE id = ?";
    $this->db->query($query, array($id));
    return $query->result();

    }

    public function get_lien($id) {
    $this->load->database();

    $query = "SELECT lien FROM pfc_article WHERE id = ?";
    $this->db->query($query, array($id));
    return $query->result();

    }

    public function get_corp($id) {
    $this->load->database();

    $query = "SELECT corp FROM pfc_article WHERE id = ?";
    $this->db->query($query, array($id));
    return $query->result();

    }
	
    public function get_auteur($id) {
    $this->load->database();

    $query = "SELECT auteur FROM pfc_article WHERE id = ?";
    $this->db->query($query, array($id));
    return $query->result();

    }
	
	    public function get_categorie($id_categ) {
    $this->load->database();

    $query = "SELECT id_categ FROM pfc_categorie WHERE id_categ = ?";
    $this->db->query($query, array($id_categ));
    return $query->result();

    }
}


?>