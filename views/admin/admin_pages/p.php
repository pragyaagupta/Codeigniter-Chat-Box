 <?php


 public function form(){
  if($this->input->post()){

 	$this->form_validation->set_rules('title','Title','required');
 	if ($this->form_validation==FALSE) {

 		$this->load->view('')
 	}

 	else{

 		$data['title']=$this->input->post['title'];
 		 if(!empty($_FILES['image']['name'])){
 		 	$img_name=$_FILES['image']['name'];
 		 	$tmp_name=$_FILES['image']['$tmp_name'];
 		 	$path='assets/images/'.$tmp_name;
 		 	move_uploaded_file($tmp_name, $path);
 		 	$data['image']=base_url().$path;
 		 }
 		 $insert=$this->My_model->get_data('admin',$data);

 		 if($insert){

 		 redirect(site_url('admin/admin/table1'));
 		 }
 		 else{
 		 	echo 'not inserted';


 		 }
 		}
 	}
        else{
        	$this->load->view('kjaG<UTM');
        }
 		 $this->load->view('admin/admin/footer');


 		 	}




 	$id=$this->uri->segment(4);


 	else{
(
        $data1['data1']=$this->db->get_where('admin', array('id'=>$id))->row_array();

 	}


if($this->input->post()){

	$email=$this->input->post('email');

	$insert=$this->My_model->check_data($email);

	 if($insert){

        $sess_array=array(

        	'id'=insert('');
        	'name'=insert('');
           );

        $this->session->
	 }


}







 




 ?>