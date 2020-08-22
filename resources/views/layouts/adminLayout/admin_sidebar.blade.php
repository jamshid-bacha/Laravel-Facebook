
<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone "><i class="icon icon-home"></i> </a>

  <ul>
  @php($count=0)
   @foreach(session()->get('minearray')  as $in)     
                   @php($count++)
                   @if($count==2)
    <li><img style="border-radius: 50%; object-fit: cover;" src="{{asset('me/'. $in) }}" alt="Logo" /> </li>
    @break
    @endif
   @endforeach
   @php($count=0)
    <li><a href="{{ url('/admin/dashboard')}}"><i class="icon icon-signal"></i> <span>
    @foreach(session()->get('minearray')  as $in)  
                   {{$in}}
                   @break
   @endforeach
  
                  
                   
    </span></a>  </li>
    <li> <a href="{{ url('/admin/dashboard')}}"><i class="icon icon-signal"></i> <span>Home</span></a> </li>
    <li> <a href=""><i class="icon icon-inbox"></i> <span>Posts</span></a> </li>
    <li><a href=""><i class="icon icon-th"></i> <span>Reviews</span></a></li>
    <li><a href=""><i class="icon icon-fullscreen"></i> <span>Photos</span></a></li>
    <li><a href=""><i class="icon icon-fullscreen"></i> <span>Videos</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Groups</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="">DCSE Batch 18 United</a></li>
        <li><a href="">DCSE All Batches</a></li>
        <li><a href="">Batch 18 2020</a></li>
      </ul>
    </li>
    
    </li>
    
    <li class="content"> <span>Facebook Usage Time After 100% it will auto Logout</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      
      <span class="percent">77%</span>
      
    </li>
   
  </ul>
</div>
<!--sidebar-menu-->
