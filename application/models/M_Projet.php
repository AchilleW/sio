<?php

class M_Projet extends CI_Model {

    public $id;
    public $nom;
    public $derniere_maj;
    public $description;

    /** =================================
     * 
     *             Global
     * 
     * =================================
     */
	 
	//ajoute une competence
	public function set_comp($libelle_comp, $description) {
    $this->load->database();
       
		$data = array(
            'libelle_comp'=> $libelle_comp,
			  'description'=> $description
	

        );
		    $this->db->insert('pfc_competence', $data);

    }
   
	 
	//renvois tout les competences
    public function get_all_competence() {
    $this->load->database();
	
    $query = $this->db->get('pfc_competence');
    return $query->result();
	
    }

    // recupere une competences d'article via son id
    public function get_competences_by_id($id_comp) {
    $this->load->database();
	
    $query = $this->db->query("SELECT libelle_comp FROM pfc_competence WHERE id_comp = $id_comp");
    return $query->result();
	
    }
	
	// ajoute une ou plusieurs competences d'un projet dans concerner
    public function add_competence($id_projet, $id_comp){	
	$this->load->database();
    $now = date("Y-m-d H:i:s");

        $data = array(
		    'id_projet' => $id_projet,
            'id_comp' => $id_comp
			

        );

        $this->db->insert('pfc_concerner', $data);

    }
		
    // recupere l'id de projet
	public function get_last_id_project() {
	//$query = $this->db->query("SELECT LAST_INSERT_ID() AS id_projet");
	$this->load->database();
    $query = $this->db->get('pfc_projet');

    //return $query->result()[0]->id_projet;
	  return $this->db->insert_id();
    }

    //recupere tout les projets
    public function get_all_project() {
    $this->load->database();
	
    $query = $this->db->get('pfc_projet');
    return $query->result();
	
    }

    // recupere un projet via son id
    public function get_project_by_id($id) {
    $this->load->database();
	
    $query = $this->db->query("SELECT nom, derniere_maj, description FROM pfc_projet WHERE id = $id");
    return $query->result();
	
    }

    //ajoute un projet
    public function add_project($nom, $description, $lien, $lien_photo) {
    $this->load->database();
    $now = date("Y-m-d H:i:s");

        $data = array(
            'nom' => $nom,
            'description' => $description,
            'derniere_maj' => $now,
            'lien' => $lien,
			 'lien_photo' => $lien_photo
        );

        $this->db->insert('pfc_projet', $data);
		return $this->db->insert_id();

    }

    //supprime un projet
    public function rm_project($id) {
    $this->load->database();
	
    $query = "DELETE FROM pfc_projet WHERE id = ?";
    $this->db->query($query, array($id));

    }

    /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */

    public function set_nom($id, $nom) {
    $this->load->database();

    $query = "UPDATE pfc_projet SET nom = ? WHERE id = ?";
    $this->db->query($query, array($nom, $id));

    }

    public function set_description($id, $description) {
    $this->load->database();

    $query = "UPDATE pfc_projet SET description = ? WHERE id = ?";
    $this->db->query($query, array($description, $id));

    }

    public function set_lien($id, $lien) {
    $this->load->database();

    $query = "UPDATE pfc_projet SET lien = ? WHERE id = ?";
    $this->db->query($query, array($lien, $id));

    }
	
	  public function set_lien_photo($id, $lien_photo) {
    $this->load->database();

    $query = "UPDATE pfc_projet SET lien_photo = ? WHERE id = ?";
    $this->db->query($query, array($lien_photo, $id));

    }

    /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */
	 
    public function get_nom($id) {
    $this->load->database();

    $query = "SELECT nom FROM pfc_projet WHERE id = ?";
    $this->db->query($query, array($id));
    return $query->result();

    }

    public function get_description($id) {
    $this->load->database();

    $query = "SELECT description FROM pfc_projet WHERE id = ?";
    $this->db->query($query, array($id));
    return $query->result();

    }

    public function get_lien($id) {
    $this->load->database();

    $query = "SELECT lien FROM pfc_projet WHERE id = ?";
    $this->db->query($query, array($id));
    return $query->result();

    }
	
	    public function get_lien_photo($id) {
    $this->load->database();

    $query = "SELECT lien_photo FROM pfc_projet WHERE id = ?";
    $this->db->query($query, array($id));
    return $query->result();

    }

}


?>

