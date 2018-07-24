<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('Home/header');
        $this->load->view('Home/home');
        $this->load->view('Home/footer');
    }

    public function contact() {
        $this->load->view('Home/header');
        $this->load->view('Home/contact');
        $this->load->view('Home/footer');
    }
    public function about() {
        $this->load->view('Home/header');
        $this->load->view('Home/about');
        $this->load->view('Home/footer');
    }

    public function sendMail() {
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Home/header');
            $this->load->view('Home/contact');
            $this->load->view('Home/footer');
        } else {

            $from = $this->input->post('email');    //senders email address
            $subject = $this->input->post('subject');  //email subject
            $name= $this->input->post('name');
//        $receiver = $this->input->post('studentNo') . "@nmmu.ac.za";
            //sending confirmEmail($receiver) function calling link to the user, inside message body
            $message = $this->input->post('message'). "\n\n This email was sent from your website by ". $name;
//            Samuel Odoh is the reciever
            $receiver = "imoyehc@gmail.com"; 

            //config email settings
            $config = array("protocol" => "smtp",
                "smtp_host" => "smtp.gmail.com",
                "smtp_port" => "587",
                "smtp_user" => "imoyehc@gmail.com",
                "smtp_pass" => "eviction22#",
                "CharSet" => "UTF-8",
                //set authentication to true
                "SMTPAuth" => "true"
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            //send email
            $this->email->from($from);
            $this->email->to($receiver);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
            $this->session->set_flashdata('flashSuccess', '<strong>Successful!</strong> Your email was sent.');
            $this->load->view('Home/header');
            $this->load->view('Home/contact');
            $this->load->view('Home/footer');
        } else {
            $this->session->set_flashdata('flashFailed', '<strong>Failed!</strong> Your message was not sent.');
            $this->load->view('Home/header');
            $this->load->view('Home/contact');
            $this->load->view('Home/footer');
        }
            
        
        }
    }

}
