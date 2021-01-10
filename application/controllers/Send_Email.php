<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_Email extends CI_Controller{


	public function index()
	{
		$this->load->view("email");	
	}

	public function send()
	{
		$subject = $this->input->post("subject",true);
		$message = $this->input->post("message",true);
		$to = $this->input->post("to",true);

		$config = ["mailtype" => "html", "charset" => "utf-8", "protocol" => "smtp", "smtp_host" => "smtp.gmail.com", "smtp_user" => "youremail@gmail.com", "smtp_pass" => "your password email", "smtp_crypto" => "ssl", "smtp_port" => 465, "crlf" => "\r\n", "newline" => "\r\n"];

		$this->email->initialize($config);
		$this->load->library("email");
		$this->email->from("youremail@gmail.com","your name");
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		if($this->email->send())
		{
			echo "<script>alert('email sukses dikirim!!!');</script>";
			redirect("Send_Email");
		}else{
			echo "<script>alert('email gagal dikirim!!!');</script>";
			redirect("Send_Email");
		}
	}
}