<?php
class Email_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("form");
    }
    public function index()
    {
        $this->load->helper('form');
        $this->load->view("form");
    }
    public function send_mail()
    {
        $from_email = "demo36308@gmail.com";
        $to_email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $name = $this->input->post("name");
        $message = $this->input->post("message");

        $this->load->library("email");

        $this->email->from($from_email, $name);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            $this->session->set_flashdata("email_send", "mail sent!");
        } else {
            $this->session->set_flashdata("email_send", "something went wrong!");
            $this->load->view("email_form");
        }
    }
}
