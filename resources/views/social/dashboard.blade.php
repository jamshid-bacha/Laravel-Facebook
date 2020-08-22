@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->

<div id="content">


  
    
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
        <img style="border-radius: 0%; object-fit: cover;width: 900px;height: 500px;" src="{{ asset('images/backend_images/wall.jpg') }}" alt="Logo" /> 
    </div>

<!--Chart-box--> 
    
    <div class="row-fluid">
      <div class="widget-box">
     
      <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
         
        <h5>Friends Post</h5>
        </div>
        <div class="widget-content" >
        <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/islam.jpg') }}"> </div>
                <div class="article-post"> <span class="user-info"> By: Islam Kamran / Date: 2 Aug 2020 / Time:09:27 AM </span>
                  <p><a href="#">My Name is Islam Kamran and I am new to facebook and I am here to learn Laravel.So the thing is that I have some experience but want to learn more about laravel.</a> </p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/zeeshan.jpg') }}"> </div>
                <div class="article-post"> <span class="user-info"> By: Zeeshan Mohammad / Date: 11 Aug 2020 / Time:10:55 AM </span>
                  <p><a href="#">My Name is Zeeshan and I am new to facebook and I am here to learn Laravel.So the thing is that I have some experience but want to learn more about laravel.</a> </p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/babar.jpg') }}"> </div>
                <div class="article-post"> <span class="user-info"> By: Babar Ali / Date: 15 Aug 2020 / Time:09:27 AM </span>
                  <p><a href="#">My Name is Babar and I am new to facebook and I am here to learn Laravel.So the thing is that I have some experience but want to learn more about laravel.</a> </p>
                </div>
              <li>
                <button class="btn btn-warning btn-mini">View All</button>
              </li>
            </ul>
          </div>
      
        
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Latest Posts</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/aman.jpg') }}"> </div>
                <div class="article-post"> <span class="user-info"> By: Aman Ali / Date: 2 Aug 2020 / Time:09:27 AM </span>
                  <p><a href="#">My Name is Aman and I am new to facebook and I am here to learn Laravel.So the thing is that I have some experience but want to learn more about laravel.</a> </p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/islam.jpg') }}"> </div>
                <div class="article-post"> <span class="user-info"> By: Islam / Date: 2 Aug 2020 / Time:09:27 AM </span>
                  <p><a href="#">My Name is Islam and I am new to facebook and I am here to learn Laravel.So the thing is that I have some experience but want to learn more about laravel.</a> </p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/zeeshan.jpg') }}"> </div>
                <div class="article-post"> <span class="user-info"> By: Zeeshan Mohammad / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p><a href="#">My Name is Babar and I am new to facebook and I am here to learn Laravel.So the thing is that I have some experience but want to learn more about laravel.</a> </p>
                </div>
              <li>
                <button class="btn btn-warning btn-mini">View All</button>
              </li>
            </ul>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>To Do list</h5>
          </div>
          <div class="widget-content">
            <div class="todo">
              <ul>
                <li class="clearfix">
                  <div class="txt"> Complete this Laravel Project <span class="by label"></span></div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Complete assignment today <span class="date badge badge-warning"></span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Working hard from now <span class="by label"></span></div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Meeting with FYP Supervisor <span class="date badge badge-info"></span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Friend Merrage <span class="date badge badge-important"></span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>Progress Box</h5>
          </div>
          <div class="widget-content">
            <ul class="unstyled">
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span>Visit Islam to my profile 90% Clicks 
                <div class="progress progress-striped ">
                  <div style="width: 90%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span>Visit Babar to my profile 72% Clicks 
                <div class="progress progress-success progress-striped ">
                  <div style="width: 72%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span>Visit Zeeshan to my profile 53% Clicks 
                <div class="progress progress-warning progress-striped ">
                  <div style="width: 53%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span>Visit Aman to my profile 3% Clicks 
                <div class="progress progress-danger progress-striped ">
                  <div style="width: 3%;" class="bar"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
       
        
      </div>
      <div class="span6">
        <div class="widget-box widget-chat">
          <div class="widget-title bg_lb"> <span class="icon"> <i class="icon-comment"></i> </span>
            <h5>Group Chat</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG4">
            <div class="chat-users panel-right2">
              <div class="panel-title">
                <h5>Active Users</h5>
              </div>
              <div class="panel-content nopadding">
                <ul class="contact-list">
                  <li id="user-Alex" class="online"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/islam.jpg') }}" /> <span>Islam</span></a><span class="msg-count badge badge-info">8</span></li>
                  <li id="user-Linda"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/babar.jpg') }}" /> <span>Babar</span></a><span class="msg-count badge badge-info">4</span></li>
                  <li id="user-John" class="online new"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/zeeshan.jpg') }}" /> <span>Zeeshan</span></a><span class="msg-count badge badge-info">5</span></li>
                  <li id="user-Mark" class="online"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/aman.jpg') }}" /> <span>Aman</span></a></li>
                </ul>
              </div>
            </div>
            <div class="chat-content panel-left2">
              <div class="chat-messages" id="chat-messages">
                <div id="chat-messages-inner"></div>
              </div>
              <div class="chat-message well">
                <button class="btn btn-success">Send</button>
                <span class="input-box">
                <input type="text" name="msg-box" id="msg-box" />
                </span> </div>
            </div>
          </div>
        </div>
        
            



          </div>
         
         
        </div>
        
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->

@endsection