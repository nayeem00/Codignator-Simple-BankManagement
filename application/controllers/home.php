<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('loggedin'))
		{
			redirect(base_url().'/login', 'refresh');
			return;
		}

		$this->load->model('homemodel');
	}

	public function index()
	{
		
		$data['userlist'] = $this->homemodel->getUserList();
		$data['username'] = $this->session->userdata('username');
		//$this->load->view('home_veiw', $data);
		$this->parser->parse('home_veiw', $data);// no php tag in view ,, 2nd parameter must
	}

	public function userdetails($userid = 0)
	{
		
		
		$user['user'] = $this->homemodel->findUser($userid);
		if($user == null)
		{
			echo "user not found";
		}
		else
		{
			$this->load->view('details_veiw', $user);
		}
	}
	public function delete($id)
	{
		if($this->input->post('dltbtn'))
		{
			$this->homemodel->deleteUser($id);
		   $data['userlist'] = $this->homemodel->getUserList();
		   $data['username'] = $this->session->userdata('username');
		   $this->parser->parse('home_veiw', $data);
		}
		else
		{
			$user['user'] = $this->homemodel->findUser($id);
			$this->load->view('delete_veiw', $user);
		}
		
	}
	
	public function logout()
	{
		$this->session->set_userdata('loggedin', false);
		redirect(base_url().'login', 'refresh');
	}
	public function addnewclick()
	{

		// $this->form_validation->set_rules('accNo','User ID','required');
		// $this->form_validation->set_rules('accName','User Name','required');
			
		// 	if(!$this->form_validation->run())
		// 	{
  //               $data['message']=validation_errors();
		// 		$this->load->view('addnew_veiw',$data);
		// 		return;
		// 	}

		if(!$this->form_validation->run('addnew'))
		{
                $data['message']=validation_errors();
		 		$this->load->view('addnew_veiw',$data);
		 		return;
		}


		if($this->input->post('CreatNBtn'))
		{
			$accountNo = $this->input->post('accNo');
			$accountName = $this->input->post('accName');
			$accountType = $this->input->post('accType');
			
		   $this->homemodel->CreateUser($accountNo,$accountName,$accountType);

		   $data['userlist'] = $this->homemodel->getUserList();
		   $data['username'] = $this->session->userdata('username');
		   $this->parser->parse('home_veiw', $data);
		}
		else
		{
			$data['message']="";
			$this->load->view('addnew_veiw',$data);
		}
		 
	}
	public function depositclick()
	{
		if(!$this->form_validation->run('deposite'))
		{
                $data['message']=validation_errors();
		 		$this->load->view('deposit_veiw',$data);
		 		return;
		}

		if($this->input->post('Dps'))
		{
			$accountNo = $this->input->post('accNO');
			$amount = $this->input->post('amount');
			
			
		   $this->homemodel->depositAmount($accountNo,$amount);

		   $data['userlist'] = $this->homemodel->getUserList();
		   $data['username'] = $this->session->userdata('username');
		   $this->parser->parse('home_veiw', $data);
		}
		else
		{
			$data['message']="";
			$this->load->view('deposit_veiw',$data);
		}
		
		      
	}
	public function transferclick()
	{
		if(!$this->form_validation->run('Transfer'))
		{
                $data['message']=validation_errors();
		 		$this->load->view('transfer_veiw',$data);
		 		return;
		}
		if($this->input->post('trans'))
		{
			$accountNoF = $this->input->post('accountNoFrom');
			$accountNoT = $this->input->post('accountNoto');
			$amount = $this->input->post('amount');
			if($this->homemodel->CheckAvailableBalance($accountNoF,$amount)){
					$this->homemodel->transAmount($accountNoF,$accountNoT,$amount);

		   			$data['userlist'] = $this->homemodel->getUserList();
		   			$data['username'] = $this->session->userdata('username');
		   			$this->parser->parse('home_veiw', $data);
			}
			else{
					$data['message'] = "Insufficient Balance" ;
					$this->load->view('transfer_veiw',$data);
			}
			
		   
		}
		else
		{
			$data['message'] = "" ;
			$this->load->view('transfer_veiw',$data);
		}
		
		      
	}
	public function withdrawclick()
	{
		if(!$this->form_validation->run('withdraw'))
		{
                $data['message']=validation_errors();
		 		$this->load->view('withdraw_veiw',$data);
		 		return;
		}
		if($this->input->post('WithD'))
		{
			$accountNo = $this->input->post('accNo');
			$amount = $this->input->post('amount');
			
			if($this->homemodel->CheckAvailableBalance($accountNo,$amount)){
					$this->homemodel->withdrawAmount($accountNo,$amount);

		   			$data['userlist'] = $this->homemodel->getUserList();
		   			$data['username'] = $this->session->userdata('username');
		   			$this->parser->parse('home_veiw', $data);
			}
			else{
					$data['message'] = "Insufficient Balance" ;
					$this->load->view('withdraw_veiw',$data);
			}
		   
		}
		else
		{
			$data['message'] = "" ;
			$this->load->view('withdraw_veiw',$data);
		}
		
		   
	}

	public function validAccountNo($accno)
	{
		$pattern = '/[0-9]{3}.[0-9]{3}.[0-9]{8}/';
		if(preg_match($pattern, $accno))
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('validAccountNo', 'Invalid account number');
			return false;
		}
	}




}
