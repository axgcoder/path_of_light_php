
<?php
class Posts extends CI_Controller {
 
  public function __construct()
  {
          parent::__construct();
          $this->load->model('PostModel');
        //  $this->load->helper('url'); 
         
  }

  public function classes()
  {
          $data['classes'] = $this->PostModel->getPosts();
          if (empty($data['classes']))
          {
                  show_404();
          }
  
          $this->load->view('pages/classes', $data);
  }

  public function schedule()
  {
          $data['schedule'] = $this->PostModel->getschedule();
          if (empty($data['schedule']))
          {
                  show_404();
          }
  
          $this->load->view('pages/schedule', $data); 
  }

  public function register(){
    if(!file_exists(APPPATH.'views/pages/register.php')){
      show_404();
    }
    $this->load->view('pages/register');
  }

  public function contact(){
    if(!file_exists(APPPATH.'views/pages/contact.php')){
      show_404();
    }
    $this->load->view('pages/contact');
  }

  public function form_validation()
  {
    //echo "OK";
    $this->load->library('form_validation');
    $this->form_validation->set_rules("Name","Name",'min_length[1]|trim|required|xss_clean|callback_alpha_dash_space');
    $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[5]');
    $this->form_validation->set_rules('Phone', 'Phone', 'required|regex_match[/^[0-9]{10}$/]');
     $this->form_validation->set_rules("Address","Address","required");

    if($this->form_validation->run()){
      //true
      $this->PostModel->insert_register();
     
    }
    else{
      //false
      $this->load->view('pages/register');
    }
  }

  public function contact_validation()
  {
    //echo "OK";
    $this->load->library('form_validation');
    $this->form_validation->set_rules("Name","Name",'min_length[1]|trim|required|xss_clean|callback_alpha_dash_space');
    $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules("Comments","Comments","required");

    if($this->form_validation->run()){
      //true
      $this->PostModel->insert_contact();
     
    }
    else{
      //false
      $this->load->view('pages/contact');
    }
  }

  public function inserted_register(){
    $this->load->view('pages/register');
  }

  public function inserted_contact(){
    $this->load->view('pages/contact');
  }
  public function alpha_dash_space($fullname){
    if (! preg_match('/^[a-zA-Z ]*$/', $fullname)) {
        $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
        return FALSE;
    } else {
        return TRUE;
    }
  }

  
}
?>
