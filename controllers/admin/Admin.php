<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('My_model');
	}

	public function delete_row(){   
    $id= $this->uri->segment(4);
    
    $b=$this->My_model->did_delete_row($id);
    if($b){
    	redirect(site_url('admin/admin'));
    }
  }

   public function catdel(){   
    $id= $this->uri->segment(4);
    
    $b=$this->My_model->delete_cat($id);
    if($b){
    	redirect(site_url('admin/admin/table1'));
    	
    }
   }



	public function catedit(){

   $id= $this->uri->segment(4);
   if($this->input->post()){
                 
                 $data['title'] = $this->input->post('title');
				if(!empty($_FILES['image']['name'])){
								//$data['title'] = $this->input->post('title');
				                 $img_name=$_FILES['image']['name'];
							       $tmp_name=$_FILES['image']['tmp_name'];
							       $path='assets/image/'.$img_name;
				                 move_uploaded_file($tmp_name,$path);
				                 $data['image'] = base_url().$path;
				             }


				
				$insert = $this->My_model->update_cat('categorytable',$data,$id);

				if($insert){
					redirect(site_url('admin/admin/table1'));
				}
			}
   else{
   $data2['data2']= $this->db->get_where('categorytable',array('id'=>$id))->row_array();
   
		$this->load->view('admin/include/header');
		
  $this->load->view('admin/admin_pages/edit_cat',$data2);
  $this->load->view('admin/include/footer');
}

}



	public function index()
	{
		$data['datas'] = $this->My_model->get_data('admin');
		$this->load->view('mana',$data);
	}


	public function edit(){

   $id= $this->uri->segment(4);
   if($this->input->post()){

				$data['name'] = $this->input->post('name');
				$data['email'] = $this->input->post('email');
				$data['password'] = $this->input->post('password');
				$data['phone'] = $this->input->post('phone');
				$data['address'] = $this->input->post('address');
				$data['age'] = $this->input->post('age');
				$insert = $this->My_model->update_record('admin',$data,$id);

				if($insert){
					redirect(site_url('admin/admin/table1'));
				}
			}
   else{
   $data1['data1']= $this->db->get_where('admin',array('id'=>$id))->row_array();
   
		$this->load->view('edit_f',$data1);
}

}




	 function update()

	{
		$id= $this->uri->segment(4);

			
		$b=$this->My_model->update_recor($id);
		
		if($b){
    	redirect(site_url('admin/admin'));
    }
    else{
    	echo "no";
    }
	}


function logout(){

	$this->session->sess_destroy();
	
      site_url(redirect('admin/admin/login'));
      
	
}



	function login(){
		
     if($this->input->post()){

				$email = $this->input->post('email');
				$password = $this->input->post('password');
				
				$insert = $this->My_model->check_data($email,$password);

				if($insert){
					$sess_array= array(
						'id'=>$insert[''],
						'name'=>$insert[''],
					);

					$this->session->set_userdata('admin_details',$sess_array);
					if($this->session->userdata('admin_details')){
						site_url(redirect('admin/admin/table1'));

					}
					else{
						site_url(redirect('admin/admin/login'));

					}}

					else{
						
						site_url(redirect('admin/admin/login'));


					}}

			else{ 
		
   
		$this->load->view('admin/admin_pages/login1');
}


}


public function blank(){
	$this->load->view('admin/include/header');
		
  $this->load->view('admin/admin_pages/blank');
  $this->load->view('admin/include/footer');

}

			public function form2(){

			 $this->load->view('admin/include/header');
					
				
			  		if($this->input->post()){
						$this->form_validation->set_rules('title','Title','required');
						
						if($this->form_validation->run()==FALSE){
							$this->load->view('admin/admin_pages/form2');
						}else{
							$data['title'] = $this->input->post('title');
							//$data['image'] = $this->input->post('image');
							if(!empty($_FILES['image']['name'])){
								//$data['title'] = $this->input->post('title');
				                 $img_name=$_FILES['image']['name'];
							       $tmp_name=$_FILES['image']['tmp_name'];
							       $path='assets/image/'.$img_name;
				                 move_uploaded_file($tmp_name,$path);
				                 $data['image'] = base_url().$path;
				             }


							$insert = $this->My_model->insert_data('categorytable',$data);
							
							if($insert){
								
					
			                  redirect(site_url('admin/admin/table1'));
			                    
								
							}
							else{
								echo "inserted";
							}
						}

						}else{
							$this->load->view('admin/admin_pages/form2');
							
						}
						$this->load->view('admin/include/footer');

				}

	public function table1(){

		$this->load->view('admin/include/header');


		$data['datas'] = $this->My_model->get_data('categorytable');
		$this->load->view('admin/admin_pages/table1',$data);
		
  
  $this->load->view('admin/include/footer');


	}

  


	public function form()
	{

		if($this->input->post()){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('phone','Phone','required');
			$this->form_validation->set_rules('address','Address','required');
			$this->form_validation->set_rules('age','Age','required');
			if($this->form_validation->run()==FALSE){
				$this->load->view('form');
			}else{
				$data['name'] = $this->input->post('name');
				$data['email'] = $this->input->post('email');
				$data['password'] = $this->input->post('password');
				$data['phone'] = $this->input->post('phone');
				$data['address'] = $this->input->post('address');
				$data['age'] = $this->input->post('age');
				$insert = $this->My_model->insert_data('admin',$data);
				
				if($insert){
					redirect(site_url('admin/admin'));
				}
				else{
					echo "inserted";
				}
			}

		}else{
			$this->load->view('form');
			
		}
	}


	public function j(){
		$data['message']=$this->input->post('y');
		$data['name']=$this->input->post('z');

		$this->My_model->insert_msg('chat',$data);
		$data['data']= $this->db->get('chat')->result_array();
	

        $this->load->view('admin/admin_pages/rep',$data);

	}



	public function jj(){
		$data['message']=$this->input->post('y');
		$data['name']=$this->input->post('z');
		
		$this->My_model->insert_msg('chat',$data);
		$data['data']= $this->db->get('chat')->result_array();
	

        $this->load->view('admin/admin_pages/rep1',$data);

	}

	public function refresh(){
        
    $data['data']= $this->db->get('chat')->result_array();

    ?>
     
     <div class="panel-body msg_container_base" id="data1" >
                    
               <?php foreach( $data['data'] as $data){
                 if($data['name']=='A') {?>
                
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                             
                            <div class="messages msg_sent">
                                <p><?= $data['message'];?> </p>
                               <input type="hidden" id="t" value="<?php echo $data['name'];?>"/>
                                <time><?= $data['name'];?> </time>
                            </div>
                            
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="<?php echo base_url();?>assets/images/users/p1.png" class=" img-responsive ">
                        </div>
                    </div>
                     <?php } 

                     else{

                  ?>


                      <?php 
                            
                                if($data['name']=='B'){?>

                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="<?php echo base_url();?>assets/images/users/p2.jpg" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            
                            <div class="messages msg_receive">
                                <p><?= $data['message'];?> </p>
                               
                                <time><?= $data['name'];?> </time>
                            </div>

                        </div>
                    </div>
               
                     <?php } } } ?>
                 
             </div>
              
    <?php

	}


	public function refresh1(){

		
	}


	

public function chat1(){
 

  

$data['data']= $this->db->get('chat')->result_array();

$this->load->view('admin/admin_pages/chat_a',$data);



}



public function chat2(){
 

  
$data['data']= $this->db->get('chat')->result_array();

$this->load->view('admin/admin_pages/chat_b',$data);



}


public function dataget(){
  
$data['data']= $this->db->get('chat')->result_array();

$this->load->view('admin/admin_pages/chat_b',$data);



}




}
?>