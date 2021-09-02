<?php

class M_Admin extends CI_Model {
  
    private $nom_Admin;
    private $prenom_Admin;
    private $login_Admin;
    private $motDePasse;


    /** =================================
     * 
     *             Global
     * 
     * =================================
     */
	 
	 //verif login et mdp admin
	 function validate(){
	 $this->load->database();
	 
	 $arr['login_Admin'] = $this->input->post('login_Admin');
	 $arr['motDePasse'] = sha1($this->input->post('motDePasse'));
     return $this->db->get_where('pfc_admin',$arr)->row();	 
	 }
	 
	 
	 
    //récuperation des login et mdp admin
	public function get_admin() { 
    $query = $this->db->query("SELECT * FROM pfc_admin WHERE id_Admin = ?");
	   
    $query ->execute();
    return $query->result();
       }

    // recupere un admin via son id_admin
    public function get_admin_by_id($id_admin) {
    $this->load->database();
		
    $query = $this->db->query("SELECT login_Admin, motDePasse FROM pfc_admin WHERE id_Admin = ?");
    return $query->result();

    }

       /** =================================
       * 
       *             SETTERS
       * 
       * =================================
       */

    //ajoute un admin
	public function set_admin($nom_Admin, $prenom_Admin, $login_Admin, $motDePasse) {
    $this->load->database();
       
		$data = array(
            'nom_Admin'=> $nom_Admin,
			'prenom_Admin'=> $prenom_Admin,
			'login_Admin'=> $login_Admin,			  
		    'motDePasse' => sha1($motDePasse),

        );

    $this->db->insert('pfc_admin', $data);

    }
		
	public function check_motdepasse($motDePasse) {
	$this->load->database(); 
		
	$query = "SELECT id_Admin FROM pfc_admin WHERE login_Admin = '".$login_Admin."' AND motDePasse = '".$motDePasse."'";
	$this->db->query($query);


    }
		
    //supprime un admin
    public function delete_admin($id_Admin) {
    $this->load->database(); 
		
    $query = "DELETE FROM pfc_admin WHERE id_Admin = ?";
    $this->db->query($query($id_Admin));

    }
		
	//rename un nom admin
    public function set_nom($id_Admin, $nom_Admin) {
    $this->load->database();

    $query = "UPDATE pfc_admin SET nom_Admin = ? WHERE id_Admin = ?";
    $this->db->query($query, array($nom_Admin, $id_Admin));

    }
		
	//rename un prenom admin		
	public function set_prenom($id_Admin, $prenom_Admin) {
    $this->load->database();

    $query = "UPDATE pfc_admin SET prenom_Admin = ? WHERE id_Admin = ?";
    $this->db->query($query, array($prenom_Admin, $id_Admin));

    }
		
	//rename un login admin
    public function set_login($id_Admin, $login_Admin) {
    $this->load->database();

    $query = "UPDATE pfc_admin SET login_Admin = ? WHERE id_Admin = ?";
    $this->db->query($query, array($login_Admin, $id_Admin));

         }
	
   }
   
?>





