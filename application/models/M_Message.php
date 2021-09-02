<?php

class M_Message extends CI_Model   {
	
	public $id_Message;
    public $nom_Message;
	public $prenom_Message;
	public $mail_Message;
    public $objet_Message;
    public $contenu_Message;


/** =================================
 * 
 *             Global
 * 
 * =================================
 */

  
			   public function set_message($nom_Message, $prenom_Message, $mail_Message, $objet_Message,  $contenu_Message) {
      
		   
		      
		
        $this->load->database();
      
        $data = array(
            'nom_Message'=> $nom_Message,
			'prenom_Message'=> $prenom_Message,
			'mail_Message'=> $mail_Message,			  
		    'objet_Message'=> $objet_Message,
		    'contenu_Message'=> $contenu_Message
		
        );

        $this->db->insert('pfc_message', $data);

    }
 


	
     /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */

		//renvois tout les messages
		public function get_all_message() {
		$this->load->database();
	
		$query = $this->db->get('pfc_message');
		return $query->result();
	
		}		
		
			//renvois tout les messages
		public function get_all_objet() {
		$this->load->database();
	
		$query = $this->db->get('pfc_objet');
		return $query->result();
	
		}		
	 
		// recupere un message via son id
    public function get_message_by_id($id_Message) {
    $this->load->database();
	
    $query = $this->db->query("SELECT nom_Message, prenom_Message, mail_Message, objet_Message, contenu_Message FROM pfc_message WHERE id_Message = $id_Message");
    return $query->result();
	
    }
	
	
        //supprime un ou plusieurs messages de la table pfc_message

        public function delete_message($id_Message) {
        $this->load->database();

        $data = array(
		    'id_Message' => $id_Message
         

        );

        $this->db->delete('pfc_message', $data);

    
        }

        // On récupère dans la table pfc_message

        public function get_mail() {
        $this->load->database();

        $query = ("SELECT mail_Message FROM pfc_message");
        $this->db->query($query);
        return $query->result();

        }


		
	 public function get_objet() {
    $this->load->database();

    $query = "SELECT id_objet FROM pfc_objet WHERE id_objet = ?";
    $this->db->query($query, array($id_objet));
    return $query->result();

    }

        // On récupère dans la table pfc_message
		
        public function get_contenu() {
        $this->load->database();

        $query = ("SELECT contenu_Message FROM pfc_message");
        $this->db->query($query);
        return $query->result();

        }




  }

?>

