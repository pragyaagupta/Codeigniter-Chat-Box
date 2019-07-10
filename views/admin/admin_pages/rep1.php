<div class="panel-body msg_container_base scroll-class" id="data1">
                    
               <?php foreach($data as $dataa){
                 if($dataa['name']=='A') {?>
                
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                             
                            <div class="messages msg_sent">
                                <p><?= $dataa['message'];?> </p>
                               <input type="hidden" id="t" value="<?php echo $dataa['name'];?>"/>
                                <time><?= $dataa['name'];?> </time>
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
                            
                                if($dataa['name']=='B'){?>

                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="<?php echo base_url();?>assets/images/users/p2.jpg" class="img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            
                            <div class="messages msg_receive">
                                <p><?= $dataa['message'];?> </p>
                               
                                <time><?= $dataa['name'];?> </time>
                            </div>

                        </div>
                    </div>
               
                     <?php } } } ?>
                 
             </div>
               
                   