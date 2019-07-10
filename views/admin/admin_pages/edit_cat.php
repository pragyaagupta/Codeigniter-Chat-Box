 

 <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit your category</strong></h3>
                                    
                                </div>
                                 <br>
                                    <br>
                              
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Title</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="title"value="<?php echo $data2['title']; ?>" class="form-control"/>
                                                <div class="form-error"></div>
                                                    <br>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                     <br>
                                    <br>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Image</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="file" value="<?php echo $data2['image']; ?>" name="image" class="form-control"/>
                                                <div class="form-error"></div>
                                                    <br>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    
                                   
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>    
                                      <input type="hidden" name="id" value="<?php echo $data2['id'];?>">                                
                                    <button class="btn btn-primary type="submit" name="edit">Edit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
        