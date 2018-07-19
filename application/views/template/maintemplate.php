<?php 
$sidebarSwitch= "true";
if($sidebarSwitch == "true"){
$this->load->view('template/header');
$this->load->view('template/leftsidebar');
$this->load->view($content);
$this->load->view('template/rightsidebar');
$this->load->view('template/footer');
}else{
$this->load->view('template/header');
//$this->load->view('template/leftsidebar');
$this->load->view($content);
//$this->load->view('template/rightsidebar');
$this->load->view('template/footer');
}