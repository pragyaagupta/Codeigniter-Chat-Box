        
      <div class="page-content-wrap">
        <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Category table</h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">Sr.no</th>
                                                    <th>name</th>
                                                    <th >image</th>
                                                  
                                                    <th >status</th>
                                                      
                                                    <th colspan="" >actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                </tr>
                                              <?php $i=1;foreach($datas as $data){ ?>
                                              <tr>
                                                <td class="text-center"><?=$i;?></td>
                                                    <td><?= $data['title'];?></td>
                                                    
                                                     <td><img src="<?= $data['image'];?>" style="width:100px; height:100px;" name="image"></td>
                                                     <td><span class="label label-success">New</span></td>
                                                  
                                                      
                                                        <td><a href="<?php echo site_url('admin/admin/catdel/'.$data['id']);?>">Delete</a></td>
                                                      <td><a href="<?php echo site_url('admin/admin/catedit/'.$data['id']);?>">Edit</a></td>
                                                   
                                                 </tr>
                                                    <?php $i++; } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                </div>