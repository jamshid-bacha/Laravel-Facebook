<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Bacha Laravel Project</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-login.css') }}" />
        <link href="{{ asset('fonts/backend_fonts/css/font-awesome.css') }}" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox"> 
            @if(Session::has('flash_message_error'))
            <div class="alert alet-error alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>  {!! session('flash_message_error') !!} </strong>
            </div>
            @endif 
            @if(Session::has('flash_message_success'))
            <div class="alert alet-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>  {!! session('flash_message_success') !!} </strong>
            </div>
            @endif  
            <div id="square">  
            
            <form id="loginform" class="form-vertical" method="post" action="{{ url('admin') }}">
            {!! csrf_field() !!}
                <div class="control-group normal_text"> 
                     <img style="border-radius: 50%; object-fit: cover;" src="{{ asset('images/backend_images/bacha1.jpg') }}" alt="Logo" />   
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly">
                                <i class="icon-user"> </i></span><input type="email" name="email" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <span class="pull-left "><a href="#" class="flip-link btn btn-info bg_bacha" id="to-recover">Register</a></span>
                    <span class="pull-right"><input type="submit" value="Login" class="btn btn-success" /> </span>
                </div>
            </form>

            <form id="recoverform" method="post" action="{{ url('jamshid') }}" class="form-vertical" enctype="multipart/form-data">
            {!! csrf_field() !!}
                <div class="control-group normal_text"> 
                     <img style="border-radius: 50%; object-fit: cover;" src="{{ asset('images/backend_images/bacha1.jpg') }}" alt="Logo" />   
                </div>


                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly">
                                <i class="icon-user" > </i></span><input type="text" name="name" placeholder="Full Name" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly">
                                <i class="icon-user" > </i></span><input type="email" name="email1" placeholder="Email" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls ">
                        <div class="main_input_box ">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input class="" type="password" name="password1" placeholder="Password" />
                        </div>
                    </div>
                </div>
                
                <div class="control-group">
                 <div class="controls">
                    <label class="col-md-0">Select Profile Image</label>
                        <div class="col-md-0">
                             <input type="file" name="myimage" />
                        </div>
                 </div>
                 </div>


                <div class="form-actions">
                    <span class="pull-left "><input type="submit" name="button" value="Register" class="btn btn-success" /></span>
                    <span class="pull-right"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Login</a></span>
                </div>
               
              
            </form>
</div>
        </div>
        
        <script src="{{ asset('js/backend_js/jquery.min.js') }}"></script>  
        <script src="{{ asset('js/backend_js/matrix.login.js') }}"></script> 
        <script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>
    </body>

</html>
