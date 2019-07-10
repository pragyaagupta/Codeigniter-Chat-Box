<?php include('header.php');?>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Panel Title</h3>
                                </div>
                                <div class="panel-body">
                                    <form id="jvalidate" role="form" class="form-horizontal" action="javascript:alert('Form #validate2 submited');">
                                <div class="panel-body">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Login:</label>  
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="login"/>
                                            <span class="help-block">min size = 2, max size = 8</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password:</label>                                        
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="password" id="password2"/>                                        
                                            <span class="help-block">min size = 5, max size = 10</span>
                                        </div>
                                    </div>                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Confirm Password:</label>                                       
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="re-password"/>
                                            <span class="help-block">required same value as Password</span>
                                        </div>
                                    </div>               
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">E-mail:</label>
                                        <div class="col-md-9">
                                            <input type="text" value="" name="email" class="form-control"/>                                        
                                            <span class="help-block">required email</span>
                                        </div>
                                    </div>
                                    <div class="form-group">                                        
                                        <label class="col-md-3 control-label">Age:</label>          
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="age"/>                                        
                                            <span class="help-block">min size = 18, max size = 100</span>
                                        </div>
                                    </div>                                                             
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date of birth:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control datepicker" name="date"/>
                                            <span class="help-block">required date</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Credit card:</label>     
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="credit"/>
                                            <span class="help-block">required credit card</span>
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Site:</label>
                                        <div class="col-md-9">
                                            <input type="text" value="http://" name="site" class="form-control"/>  
                                            <span class="help-block">required url</span>
                                        </div>
                                    </div>                                                                                        
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary" type="button" onClick="jvalidate.resetForm();$('#gender').next('.bootstrap-select').removeClass('error').removeClass('valid')">Hide prompts</button>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>                                                                                                                          
                                </div>                                               
                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
<?php include('footer.php');?>