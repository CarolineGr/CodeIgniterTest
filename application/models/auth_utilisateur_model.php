<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth_utilisateur_model extends CI_Model{
    
    protected $table = 'utilisateurs';
    protected $_id;
    protected $_nom;
    protected $_pseudo;
  
    

    public function __construct() {
        parent::__construct();
        $this->load_from_session();
    }
    
    public function testbddm() {
        $query = $this->db->get('utilisateurs');
        $data['records'] = $query->result();
        return $data;
    }
    
    public function testformm($pseudo) {
        $data['user'] = $this->load_utilisateur($pseudo);
        return $data;
    }
    
    public function __get($key) {
        $method_name = 'get_property_'.$key;
         if (method_exists($this, $method_name)) { 
             return $this->method_name();
        } else { 
            return parent::__get($key);
        } 
    }
    
    protected function clear_data() {
        $this->_id = null;
        $this->_nom = null;
    }
    
    protected function clear_session(){
        $this->session->user_data = null;
    }
    
    protected function get_property_id() {
        return $this->_id;
    }
    
    protected function get_property_is_connected() {
        return $this->_id !== null;
    }
    
    protected function get_property_nom() {
        return $this->_nom;
    }
    
    protected function get_property_pseudo() {
        return $this->_pseudo;
    }
    
    protected function load_from_session() {
        if($this->session->user_data){
            $this->_id = $this->session->user_data['id'];
            $this->_nom = $this->session->user_data['nom'];
        }else{
            $this->clear_data();
        }
    }
    
    protected function load_utilisateur($pseudo) {
        return $this->db
                    ->select('*')
                    ->from('utilisateurs')
                    ->where('pseudo',$pseudo)
                    ->get()
                    ->first_row();                    
    }
    
    public function login($pseudo,$mdp) {
        $utilisateur = $this->load_utilisateur($pseudo);
        $valid = false;
        if (($utilisateur !== NULL) && password_verify($mdp, $utilisateur->mdp)) { 
            $this->_id = $utilisateur->id;
            $this->_nom = $utilisateur->nom;
            $this->_pseudo = $utilisateur->pseudo;
            $this->save_session();
            $valid = true;
            return $valid;
        }else{
            $this->logout();
            return $valid;
        }        
    }

    public function logout() {
        $this->clear_data();
        $this->clear_session();
    }
    
    protected function save_session() {
        $this->session->user_data =
                [
                    'id' => $this->_id,
                    'nom'=> $this->_nom,
                    'pseudo' => $this->_pseudo
                ];
    }
}

//    public function nouvelUtilisateur($pseudo,$nom,$prenom,$email,$mdp){
//        $this->db->set('id',null,false);
//        $this->db->set('pseudo',$pseudo);
//        $this->db->set('nom',$nom);
//        $this->db->set('prenom',$prenom);
//        $this->db->set('email',$email);
//        $this->db->set('mdp',$mdp);
//        
//        return $this->db->insert($this->table);
//    }
//    
//    public function authentifierUtilisateur($pseudo,$mdp){
//        return $this->db->select('pseudo','mdp')
//                        ->from($this->table)
//                        ->where('pseudo', $pseudo)
//                        ->where('mdp',$mdp)
//                        ->get()
//                        ->result();
//    }
//}