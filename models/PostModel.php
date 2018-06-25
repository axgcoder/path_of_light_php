
<?php
class PostModel extends CI_Model {
 
    public function __construct()
    {
            $this->load->database();
    }

   function getPosts(){

    $this->db->select("classname,description"); 
    $this->db->from('class');
    $query = $this->db->get();
 
  //  $this->db->_error_message(); 
  //  $this->db->_error_number();
    return $query->result_array();

   
    if ($query->result() > 0){
        echo 'Success';
    }
 }
 

   function getschedule(){
    $query = $this->db->query("SELECT c.classname,d.daysname,t.time FROM SCHEDULE s,class c,days d,time t where d.daysid=s.daysid AND c.classid=s.classid AND t.timeid=s.timeid order by d.daysid,t.timeid");
   
    //$query = $this->db->get();
    return $query->result_array();

   }

   public function insert_register(){
    $classid = $this->input->post("classes");
    $daysid = $this->input->post("schedule");
    $timeid = $this->input->post("times");


    $arrayhelper = array(
        'classid' =>  $classid,
        'daysid' =>  $daysid ,
        'timeid'  => $timeid 
        );


    
    $table_row_count =$this->db->query("SELECT * from schedule where classid=$classid and daysid=$daysid and timeid=$timeid");
  
    if($table_row_count ->num_rows() == 0)
    {
      //$class_query = "SELECT c.classname,d.daysname,t.time FROM SCHEDULE s,class c,days d,time t where  s.classid=$classid AND d.daysid=s.daysid AND c.classid=s.classid AND t.timeid=s.timeid order by d.daysid,t.timeid";
      
      switch($classid){
        case 1:echo '<script type="text/javascript">
        alert("Gentle Hatha Yoga timings are \n Monday-Friday: 9:00am and 7:00pm  \n Saturday-Sunday: 10:30am and 1:30pm");
        </script>';
        $this->load->view('pages/register');
        break;
        case 2:echo '<script type="text/javascript">
        alert("Vinyasa Yoga timing are \n Monday-Friday: 10:30am  \n Saturday-Sunday: Noon and 3:00pm");
        alert("10:30am");
        </script>';
        $this->load->view('pages/register');
        break;
        case 3:echo '<script type="text/javascript">alert("Restorative Yoga timings are \n Monday-Friday 5:30pm \n Saturday-Sunday 5:30pm");</script>';
        $this->load->view('pages/register');
        break;
      }
    }
    else{ 
    

    $data = array(  
        "Name"     =>$this->input->post("Name"),  
        "Password" =>$this->input->post("Password"),
        "Email"  =>$this->input->post("Email"),
        "Phone"  =>$this->input->post("Phone"),
        "Address"  =>$this->input->post("Address")
    ); 
    $data = $this->security->xss_clean($data);
    
    $this->db->insert("client",$data);
    //$query = $this->db->query("Select MAX(clientid) from client");
    //$clientid = $query->result_array();

    $this->db->select_max('clientid');
    $result  = $this->db->get('client')->row(); 

    

    $data2 = array(
        "clientid"     => $result ->clientid, 
        "classid" =>element('classid', $arrayhelper),
        "daysid" =>element('daysid', $arrayhelper),
        "timeid" =>element('timeid', $arrayhelper),
    );
      
        
        $this->db->insert("clientschedule",$data2);
        redirect(base_url() . "posts/inserted_register");
   }
} 

public function insert_contact(){
    $data = array(  
        "Name"     =>$this->input->post("Name"),  
        "Email"  =>$this->input->post("Email"),
        "Comments" =>$this->input->post("Comments")     
    ); 

    $this->db->insert("contact",$data);
    redirect(base_url() . "posts/inserted_contact");
}
}
?>
