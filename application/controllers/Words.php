<?php 
	class Words extends CI_Controller {
	
		public function index() { 

			$this->load->view('generate');
			// $this->unset_session_data();
	
		}

		public function unset_session_data() { 
			//removing session data 
			$this->session->unset_userdata('hits'); 

		} 

		public function process_form(){
			$this->load->helper('string');
			$str = random_string('alnum', 14);
			$hits = $this->session->userdata('hits');
			if($this->input->post() != NULL){
				$session_data = array(
					'hits' => $this->session->set_userdata('hits', $hits + 1),
					'speak' => $this->session->set_userdata('speak', $str)
				);
				redirect('words/result');
			}
		}
	
		public function result(){
			$this->load->view('results');
		}
	} 
?>