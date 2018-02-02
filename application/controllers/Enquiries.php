<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiries extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('email');
	}

	public function index()
	{
		$this->load->view('enquiries');
	}

	public function do_submit()
	{
		require_once(APPPATH.'libraries/PHPMailer/PHPMailerAutoload.php');

		$config = array(
			array(
				'field' => 'firstname',
				'label' => 'firstname',
				'rules' => 'required',
			),
			array(
				'field' => 'lastname',
				'label' => 'lastname',
				'rules' => 'required',
			),
			array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'required|valid_email',
			),
			array(
				'field' => 'mobile',
				'label' => 'mobile',
				'rules' => 'required',
			),
			array(
				'field' => 'address',
				'label' => 'address',
				'rules' => 'required',
			),
			array(
				'field' => 'country',
				'label' => 'country',
				'rules' => 'required',
			),
			array(
				'field' => 'city',
				'label' => 'city',
				'rules' => 'required',
			),
			array(
				'field' => 'message',
				'label' => 'message',
				'rules' => 'required',
			),
		);
		$this->form_validation->set_rules($config);

		$type = '';
		$msg_become = '';
		$subject = '';

		if ($this->input->post('owner')) {
			$this->form_validation->set_rules('residence_number', 'residence_number', 'required');
			$type = 'owner';
			$subject = 'Owner of the residences';
		}

		if ($this->input->post('become')) {
			$this->form_validation->set_rules('where_hear', 'where_hear', 'required');
			$this->form_validation->set_rules('which_type', 'which_type', 'required');
			
			$type = 'become';
			$subject = 'Become Owner of the residences';

			$msg_become  =  '<p>Where did you hear about Magnolias? :'.$this->input->post('where_hear').'</p>';
			$msg_become .= '<p>Which type of unit do you prefer? :'.$this->input->post('which_type').'</p>';

		}
			
			
		if ($this->form_validation->run()) {

			$this->db->set('created_date', 'NOW()', false)->insert('enquiries', array(
				'firstname' => $this->input->post('firstname', true),
				'lastname' => $this->input->post('lastname', true),
				'email' => $this->input->post('email', true),
				'mobile' => $this->input->post('mobile', true),
				'address' => $this->input->post('address', true),
				'country' => $this->input->post('country', true),
				'city' => $this->input->post('city', true),
				'residence_number' => $this->input->post('residence_number', true),
				'where_hear' => $this->input->post('where_hear', true),
				'which_type' => $this->input->post('which_type', true),
				'message' => $this->input->post('message', true),
				'ip' => $this->input->ip_address(),
				'data_from' => $this->input->post('residences'),//$type
			));

			$htmlContent = '<p>Name :'.$this->input->post('firstname').' '.$this->input->post('lastname').'</p>';
			$htmlContent .= '<p>Residences number :'.$this->input->post('residence_number').'</p>';
			$htmlContent .= '<p>Email :'.$this->input->post('email').'</p>';
			$htmlContent .= '<p>Mobile :'.$this->input->post('mobile').'</p>';
			$htmlContent .= '<p>Address :'.$this->input->post('address').'</p>';
			$htmlContent .= '<p>Country :'.$this->input->post('country').' City : '.$this->input->post('city').'</p>';
			$htmlContent .= $msg_become;
			$htmlContent .= '<p>Message :'.$this->input->post('message').'</p>';

			$body = $this->load->view('mail/body', array ('htmlContent' => $htmlContent), true);

			$mail = new PHPMailer();
            $mail->isSMTP();                                   // Set mailer to use SMTP
            $mail->Host = $this->config->item('smtp_host');
            $mail->Username = $this->config->item('smtp_user');         // SMTP username
            $mail->Password = $this->config->item('smtp_pass');                  // SMTP password
            $mail->SMTPSecure = $this->config->item('smtp_secure');                           // Enable TLS encryption, `ssl` also accepted
            $mail->SMTPAuth = true;                             // Enable SMTP authentication
            $mail->SMTPDebug = $this->config->item('debug');   // Enable verbose debug output
            $mail->Port = $this->config->item('smtp_port');                                  // TCP port to connect, tls=587, ssl=465
            $mail->setFrom($this->config->item('email_from'), $this->config->item('email_from'));
            $mail->Subject = $subject;
            $mail->msgHTML($body);
            $mail->SMTPOptions = $this->config->item('smtp_options');
            $email_to = $this->config->item('email_to');
            foreach($email_to as $inx => $email_name) {
                $mail->addAddress($email_name, $email_name);
            }

            // Sending email
            if ($mail->send()) {
                redirect('enquiries/thankyou');
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
		}
		
		redirect('enquiries');
	}

	public function thankyou()
	{
		$this->load->view('enquiries-thankyou');
	}

}
