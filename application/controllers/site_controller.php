<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_controller extends CI_Controller{
    
//    function __construct() {
//        parent::__construct();
//        $this->load->view('debut_view');
//        $this->load->view('accueil_view');
//        $this->load->view('fin_view');
//    }
    
    public function index() {
        
        $this->load->view('debut_view');
        $this->load->view('accueil_view');
        $this->load->view('fin_view');
        
    }
     
    public function testbdd(){
        $this->load->model('auth_utilisateur_model');        
                
        $data = $this->auth_utilisateur_model->testbddm();
        
        $this->load->view('testbdd_view',$data);
    }
    
    public function authentification() {
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('auth_utilisateur_model');

        $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|xss_clean');    
        $this->form_validation->set_rules('mdp', 'Mot de passe', 'trim|required|xss_clean');
        
        if($this->form_validation->run()){            
            
            $pseudo = $this->input->post('pseudo');
            $mdp = $this->input->post('mdp');
            
            if($this->auth_utilisateur_model->login($pseudo, $mdp)){
                redirect('home_view');
            }
        }else{
            $this->load->view('debut_view');
            $this->load->view('accueil_view');
            echo 'encore raté !!';
            $this->load->view('fin_view');
            
        }
    }
    
    public function deconnexion() {
        $this->load->model('auth_utilisateur_model');
        
        $this->auth_utilisateur_model->logout();
        
        $this->load->view('debut_view');
        $this->load->view('accueil_view');
        $this->load->view('fin_view');
    }
}