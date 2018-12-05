<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Edit Profile</div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="/profile/editprofile/submit">
                {{csrf_field()}}
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            

                    <form  class="form-horizontal" method="post" action="/profile/editprofile/submit">
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Name </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="nameinitial" placeholder="{{Auth::user()->name}}" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_nameinitial" class="form-group required">
                            <label for="id_nameinitial" class="control-label col-md-4  requiredField"> Name with initials </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_nameinitial" maxlength="30" name="nameinitial" placeholder="{{Auth::user()->nameWithInitials}}" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_nic" class="form-group required">
                            <label for="id_nic" class="control-label col-md-4  requiredField"> NIC </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_nic" maxlength="30" name="nic" placeholder="{{Auth::user()->nic}}" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Contact Number</label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="id_number" name="number" placeholder="{{Auth::user()->contactNumber}}" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="{{Auth::user()->email}}" style="margin-bottom: 10px" type="email" />
                            </div>     
                        </div>
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField">Address</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_location" name="location" placeholder="{{Auth::user()->address}}" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Password</label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_password1" name="password1" placeholder="Edit Password" style="margin-bottom: 10px" type="password" />
                            </div>
                        </div>
                        <div id="div_id_password2" class="form-group required">
                             <label for="id_password2" class="control-label col-md-4  requiredField"> Confirm password</label>
                             <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_password2" name="password2" placeholder="Confirm your password" style="margin-bottom: 10px" type="password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls col-md-offset-4 col-md-8 ">
                                
                                    
                            </div>
                        </div> 
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="submit" value="save" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                            </div>
                        </div> 
                        
                    </form>
            </div>
        </div>
    </div> 
</div>
    





</div>            