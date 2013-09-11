<?php
//
class updata extends  CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('style_updata');
	}

	
	function i_my()
	{
        //  print_r($_POST);die();
        $name=$_POST['uid'];
        $data=array('gender'=>$_POST['uid'],'useradmin'=>$_POST['uid'],'gender'=>$_POST['gender'],'email'=>$_POST['email'],'mode'=>$_POST['mode']);
        //  print_r($data);die();
        // $this->style_updata->i_my($data);
        if( $data['gender']=='m'){$data['gender_demo']="男";}elseif ( $data['gender']=='f'){$data['gender_demo']="女";}elseif ( $data['gender']=='n'){$data['gender_demo']="保密";}
		$this->db->where('useradmin',$data['useradmin']);
			$data=array( 'uptime'=>date('Y-m-d H:i:s' ,mktime()), 'gender_demo'=>$data['gender_demo'] ,'gender' => $data['gender'],  'mode' =>  $data['mode'], 'email' =>  $data['email']);
			$this->db->update('user',$data);
        if($this->db->affected_rows()>0)
        { //echo "修改成功!请重新登录";
                                        
                                        $select=array( 'useradmin'=>$name);
              $user_message=$this->db->get_where('user',$select);
             // print_r($user_message['user_message']);
             foreach($user_message->result() as $user_message)
             {
                 // print_r($user_message->useradmin);
                 // print_r($user_message->u_img);
                 // print_r($user_message->gender_demo);
                 // print_r($user_message->name);
              
                 $user_data['data']=array(
                                  'username'=>$user_message->useradmin,
                                  'u_img'=>$user_message->u_img,
                                  'gender_demo'=>$user_message->gender_demo,
                                  'name'=>$user_message->name,
                                  'access_token_key'=>$user_message->access_token_key,
                                  'email'=>$user_message->email,
                                  'mode'=>$user_message->mode,
                                  'key_id'=>$user_message->key_id,
                                  'type'=>$user_message->type,
                                  'passwd'=>$user_message->passwd,
                                  'status'=>$user_message->status 
                 );
                 
              }
             $this->load->view('load/i_my',$user_data);
                              
       }
      
        
        
        
    }//,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
	
    
    
    function i_my_mima()
	{
        //print_r($_POST);die();
        $name=$_POST['usesr_id'];
        if($_POST['newpassword']===$_POST['newpassword2']){
        $data=array();
        //  print_r($data);die();
        // $this->style_updata->i_my($data);
       
		$this->db->where('key_id',$name);
			$data=array( 'uptime'=>date('Y-m-d H:i:s' ,mktime()), 'passwd'=>$_POST['newpassword'],'email'=>$_POST['emailnew']);
			$this->db->update('user',$data);
        if($this->db->affected_rows()>0)
        {
                                        
                                        $select=array( 'key_id'=>$name);
              $user_message=$this->db->get_where('user',$select);
             // print_r($user_message['user_message']);
             foreach($user_message->result() as $user_message)
             {
                 // print_r($user_message->useradmin);
                 // print_r($user_message->u_img);
                 // print_r($user_message->gender_demo);
                 // print_r($user_message->name);
              
                 $user_data['data']=array(
                                  'username'=>$user_message->useradmin,
                                  'u_img'=>$user_message->u_img,
                                  'gender_demo'=>$user_message->gender_demo,
                                  'name'=>$user_message->name,
                                  'access_token_key'=>$user_message->access_token_key,
                                  'email'=>$user_message->email,
                                  'mode'=>$user_message->mode,
                                  'key_id'=>$user_message->key_id,
                                  'type'=>$user_message->type,
                                  'passwd'=>$user_message->passwd,
                                  'status'=>$user_message->status 
                                 );
                 
              }
            // print_r($user_data['data']);
             $this->load->view('load/i_my',$user_data);
                              
       }
      
        }
        
        
	}
    
     function i_my_status()
	{
         //print_r($_POST);die();
        $name=$_POST['user_id'];

		$this->db->where('key_id',$name);
			$data=array( 'uptime'=>date('Y-m-d H:i:s' ,mktime()), 'status'=>$_POST['status']);
			$this->db->update('user',$data);
        if($this->db->affected_rows()>0)
        {
                                        
                                        $select=array( 'key_id'=>$name);
              $user_message=$this->db->get_where('user',$select);
             // print_r($user_message['user_message']);
             foreach($user_message->result() as $user_message)
             {
                 // print_r($user_message->useradmin);
                 // print_r($user_message->u_img);
                 // print_r($user_message->gender_demo);
                 // print_r($user_message->name);
              
                 $user_data['data']=array(
                                  'username'=>$user_message->useradmin,
                                  'u_img'=>$user_message->u_img,
                                  'gender_demo'=>$user_message->gender_demo,
                                  'name'=>$user_message->name,
                                  'access_token_key'=>$user_message->access_token_key,
                                  'email'=>$user_message->email,
                                  'mode'=>$user_message->mode,
                                  'key_id'=>$user_message->key_id,
                                  'type'=>$user_message->type,
                                  'passwd'=>$user_message->passwd,
                                  'status'=>$user_message->status 
                                 );
                 
              }
            // print_r($user_data['data']);
             $this->load->view('load/i_my',$user_data);
                              
       }
      
        
        
        
	}
    
    
     function i_my_status_two()
	{
         //print_r($_POST);die();
        $name=$_POST['user_id'];

		$this->db->where('key_id',$name);
			$data=array( 'uptime'=>date('Y-m-d H:i:s' ,mktime()), 'status'=>$_POST['status']);
			$this->db->update('user',$data);
        if($this->db->affected_rows()>0)
        {
                                        
                                        $select=array( 'key_id'=>$name);
              $user_message=$this->db->get_where('user',$select);
             // print_r($user_message['user_message']);
             foreach($user_message->result() as $user_message)
             {
                 // print_r($user_message->useradmin);
                 // print_r($user_message->u_img);
                 // print_r($user_message->gender_demo);
                 // print_r($user_message->name);
              
                 $user_data['data']=array(
                                  'username'=>$user_message->useradmin,
                                  'u_img'=>$user_message->u_img,
                                  'gender_demo'=>$user_message->gender_demo,
                                  'name'=>$user_message->name,
                                  'access_token_key'=>$user_message->access_token_key,
                                  'email'=>$user_message->email,
                                  'mode'=>$user_message->mode,
                                  'key_id'=>$user_message->key_id,
                                  'type'=>$user_message->type,
                                  'passwd'=>$user_message->passwd,
                                  'status'=>$user_message->status 
                                 );
                 
              }
            // print_r($user_data['data']);
             $this->load->view('load/i_my',$user_data);
                              
       }
      
        
        
        
	}
	
	
	
	
	
	
	
	
	
	}
