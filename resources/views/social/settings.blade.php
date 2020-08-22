@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  <a href="{{ url('/admin/settings')}}" class="current">Setting</a> </div>
    <h1>Change Password</h1>
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
  </div>
  <div class="container-fluid"><hr>
 
    <div class="row-fluid">
     
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Update Password</h5>
                
            </div>
            <div class="widget-content nopadding">
                <!-- the javascript file path C:\wamp64\www\bachaproject\public\js\backend_js\matrix.form_validation.js for this form field checking
            1) if filed empty show error "this field is required"
            2) if less then 8 character will show error 
            3) if password not match will show error
            4) if current password not match will show error but this will be doing Jquery/AJAX-->
              <form class="form-horizontal" method="post" action="{{ ('/admin/update-pwd') }}" name="updating_password" id="updating_password" novalidate="novalidate">
              {!! csrf_field() !!}
              <div class="control-group">
                  <label class="control-label">Current Password</label>
                  <div class="controls">
                    <input type="password" name="current_pwd" id="current_pwd" />
                    <span id="pwdChk"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">New Password</label>
                  <div class="controls">
                    <input type="password" name="new_pwd" id="new_pwd" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Confirm password</label>
                  <div class="controls">
                    <input type="password" name="confirm_pwd" id="pwd2" />
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Update Password" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection